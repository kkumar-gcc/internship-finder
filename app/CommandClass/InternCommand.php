<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Intern;;

use Illuminate\Support\Facades\Validator;

class InternCommand
{

    public function newIntern(array $formData)
    {

        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'other_name' => ['required'],
            'gender' => ['required'],
            'phone' => ['required'],
            'date_of_birth' => ['required'],
            'house_number' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //save a new intern
        $intern = new Intern();
        $this->saveInternData($formData, $intern);
        return ['success' => true, 'data' => $intern];
    }

    public function updateIntern(array $formData, int $id)
    {

        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'other_name' => ['required'],
            'gender' => ['required'],
            'phone' => ['required'],
            'date_of_birth' => ['required'],
            'house_number' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $intern = Intern::find($id);
        $this->saveInternData($formData, $intern);
        return ['success' => false, 'data' => $intern];
    }

    public function saveInternData($formData, $intern)
    {
        //get id of current user
        $loggedInUserId = Auth()->user()->id;
        $intern->user_id = $loggedInUserId;
        $intern->first_name = $formData['first_name'];
        $intern->last_name = $formData['last_name'];
        $intern->other_name = $formData['other_name'];
        $intern->gender = $formData['gender'];
        $intern->phone = $formData['phone'];
        $intern->date_of_birth = $formData['date_of_birth'];
        $intern->save();

        //save and intern address
        $address = new Address();
        $address->house_number = $formData['house_number'];
        $address->city = $formData['city'];
        $address->state = $formData['state'];
        $address->country = $formData['country'];
        $address->save();



        $addressId = $address->id;

        //update intern address
        $intern = Intern::find($loggedInUserId);
        $intern->address = $addressId;
        $intern->save();
    }
}
