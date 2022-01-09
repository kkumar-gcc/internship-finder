<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Organization;
use App\Models\Intern;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

class OrganizationCommand
{

    public function newOrganization(array $formData)
    {
        $rules = [
            'organization_name' => ['required'],
            'organization_phone' => ['required'],
            'house_number' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {;
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //save a new intern
        $organization = new Organization();
        $this->saveOrganizationData($formData, $organization);
        return ['success' => true, 'data' => $organization];
    }
    public function updateOrganization(array $formData, int $id)
    {
        $rules = [
            'organization_name' => ['required'],
            'organization_phone' => ['required'],
            'house_number' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
        ];
        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $organization = Organization::find($id);
        $this->saveOrganizationData($formData, $organization);
        return ['success' => false, 'data' => $organization];
    }

    public function saveOrganizationData($formData, $organization)
    {
        //get id of current user
        $loggedInUserId = Auth()->user()->id;
        //save and organization address
        $organization->organization_name = $formData['organization_name'];
        $organization->organization_phone = $formData['organization_phone'];
        $organization->user_id = $loggedInUserId;

        // $organization->address_id = ;
        $address = new Address();
        $address->house_number = $formData['house_number'];
        $address->city = $formData['city'];
        $address->state = $formData['state'];
        $address->country = $formData['country'];
        $address->save();

        $addressId = $address->id;
 
        $organization->address_id=$addressId;
        $organization->save();
      
    }
}
