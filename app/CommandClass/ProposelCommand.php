<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Intern;
use App\Models\Proposel;

;

use Illuminate\Support\Facades\Validator;

class ProposelCommand
{

    public function newProposel(array $formData)
    {

        $rules = [
            'reason' => ['required'],
            'available_time' => ['required']
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //save a new intern
        $proposel = new Proposel();
        $this->saveProposelData($formData, $proposel);
        return ['success' => true, 'data' => $proposel];
    }

    // public function updateIntern(array $formData, int $id)
    // {

    //     $rules = [
    //         'first_name' => ['required'],
    //         'last_name' => ['required'],
    //         'other_name' => ['required'],
    //         'gender' => ['required'],
    //         'phone' => ['required'],
    //         'date_of_birth' => ['required'],

    //         'area_of_interest' => ['required'],
    //  'house_number' => ['required'],
    //         'city' => ['required'],
    //         'state' => ['required'],
    //         'country' => ['required'],
    //     ];

    //     $validator = Validator::make($formData, $rules);
    //     if ($validator->fails()) {
    //         return ['success' => false, 'data' => $validator->errors(), 400];
    //     }

    //     $intern = Intern::find($id);
    //     $this->saveProposelData($formData, $intern);
    //     return ['success' => false, 'data' => $intern];
    // }

    public function saveProposelData($formData, $proposel)
    {
        //get id of current user
        $loggedInInternId = Auth()->user()->intern->id;
        $proposel->intern_id = $loggedInInternId;
        $proposel->reason = $formData['reason'];
        $proposel->available_time = $formData['available_time'];
        $proposel->internship_id = $formData['internshipId'];
        $proposel->save();

        //save and intern address
        // $address = new Address();
        // $address->house_number = $formData['house_number'];
        // $address->city = $formData['city'];
        // $address->state = $formData['state'];
        // $address->country = $formData['country'];
        // $address->save();

        //update intern address
        // $intern->address_id = $address->id;
        // $proposel->save();
    }
}
