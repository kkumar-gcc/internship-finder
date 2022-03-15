<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\History;
use App\Models\Intern;
use App\Models\User;;

use Illuminate\Support\Facades\Validator;

class HistoryCommand
{

    public function newHistory(array $formData)
    {

        $rules = [
            'title' => ['required'],
            'description' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //save a new intern
        $history = new History();
        $this->saveHistoryData($formData, $history);

      

        return ['success' => true, 'data' => $history];
    }

    public function updateHistory(array $formData, int $id)
    {

        $rules = [
            'title' => ['required'],
            'description' => ['required'],
        ];
       
        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $history = History::find($id);
        $this->saveHistoryData($formData, $history);
        return ['success' => false, 'data' => $history];
    }

    public function saveHistoryData($formData, $history)
    {
        $loggedInUserId = Auth()->user()->intern->id;
        $history->intern_id = $loggedInUserId;
        $history->title = $formData['title'];
        $history->description=$formData['description'];
        $history->save();
    }
}
