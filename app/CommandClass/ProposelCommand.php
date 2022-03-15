<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Intern;
use App\Models\Internship;
use App\Models\Proposel;

;

use Illuminate\Support\Facades\Validator;

class ProposelCommand
{

    public function newProposel(array $formData)
    {

        $rules = [
            'reason' => ['required'],
            'available_time' => ['required'],
    
        ];

        $validator = Validator::make($formData, $rules);
        $proposelcheck = Proposel::where('intern_id', auth()->user()->intern->id)->where('internship_id', $formData['internshipId'])->first();
       
        if (($validator->fails())||($proposelcheck)) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }
        
        //save a new intern
        $proposel = new Proposel();
        $this->saveProposelData($formData, $proposel);

        // $internship=Internship::find($formData['internshipId']);
        // $internship->interns()->attach(auth()->user()->intern->id);
        
        return ['success' => true, 'data' => $proposel];
    }

    public function updateStatus(array $formData, int $id)
    {
        $rules = [  
            'status' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $proposel = Proposel::find($id);
       $proposel->status=$formData['status'];
       $proposel->save();
        return ['success' => false, 'data' => $proposel];
    }

    public function saveProposelData($formData, $proposel)
    {
        //get id of current user
        $loggedInInternId = Auth()->user()->intern->id;
        $proposel->intern_id = $loggedInInternId;
        $proposel->reason = $formData['reason'];
        $proposel->available_time = $formData['available_time'];
        $proposel->internship_id = $formData['internshipId'];
        $proposel->status=$formData['status'];
        $proposel->save();
    }
}
