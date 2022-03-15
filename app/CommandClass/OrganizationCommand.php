<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Organization;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrganizationCommand
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newOrganization(array $formData)
    {
        $rules = [
            'name' => ['required'],
           
        ];
        // dd($formData);
        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //create a new staff
        $organization = new Organization();
        $this->saveOrganizationData($formData, $organization);
// dd($organization);
        $user = User::find(auth()->user()->id);
        $user->complete = true;
        $user->save();

        return ['success' => true, 'data' => $organization];
    }

    public function updateOrganization(array $formData, int $id)
    {

        $rules = [
            'name' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $organization= Organization::find($id);

        // $staff->first_name = $formData['first_name'];
        // $staff->last_name = $formData['last_name'];
        // $staff->company_status = $formData['company_status'];

        $organization->save();
        return ['success' => false, 'data' => $organization];
    }
    public function saveOrganizationData($formData, $organization)
    {
        $organizationPhoto = "noimage.png";
        $organizationPhoto = date('mdYHis') . uniqid() . '.' . $formData['photo']->extension();
        $formData['photo']->move(public_path('ProfilePhoto'), $organizationPhoto);

       
       
        $loggedInUserId = Auth()->user()->id;


        $organization->user_id = $loggedInUserId;
        $organization->name = $formData['name'];
        $organization->profile_image=$organizationPhoto;
        $organization->save();


        //save and intern address
        // $address = new Address();
        // $address->house_number = $formData['house_number'];
        // $address->city = $formData['city'];
        // $address->state = $formData['state'];
        // $address->country = $formData['country'];
        // $address->save();

        //update intern address
        // $$organization->address_id = $address->id;
        // $organization->save();
    }
}
