<?php

namespace App\CommandClass;

use App\Models\Address;
use App\Models\Intern;;

use App\Models\Staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Password;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StaffCommand
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStaff()
    {
        return view('staff.index');
    }
    public function newStaff(array $formData)
    {
        $rules = [
            'email' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'last_name' => ['required'],
            'company_status' => ['required']
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //save a new intern
        $staff = new Staff();
        $this->saveStaffData($formData, $staff);
        return ['success' => true, 'data' => $staff];
    }

    public function updateStaff(array $formData, int $id)
    {

        $rules = [
            'email' => ['required|email'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            // 'password'=>['required'],
            'company_status' => ['required']
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        $staff = Staff::find($id);

        // $staff->email = $formData['email'];
        $staff->first_name = $formData['first_name'];
        $staff->last_name = $formData['last_name'];
        $staff->company_status = $formData['company_status'];

        $staff->save();
        // $this->saveStaffData($formData, $staff);
        return ['success' => false, 'data' => $staff];
    }
    public function saveStaffData($formData, $staff)
    {
        //get id of current user
        // $loggedInUserId = Auth()->user()->id;
        // $->user_id = $loggedInUserId;
        $quickpass = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyz0123456789', 10)), 0, 10);

        $staff->email = $formData['email'];
        $staff->first_name = $formData['first_name'];
        $staff->last_name = $formData['last_name'];
        $staff->company_status = $formData['company_status'];
        $staff->password = Hash::make($quickpass);

        $staffEmail = $formData['email'];
//to set token in database for password resets
        DB::table('password_resets')->insert([
            'email' => $staffEmail,
            'token' => Str::random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email', $staffEmail)->first();

        $token = $tokenData->token;
        $email = $staffEmail;

        $url = "http://127.0.0.1:8000/reset-password/" . $token;

        $data = ([
            'first_name' => $staff->first_name,
            'last_name' => $staff->last_name,
            'email' => $staff->email,
            'url' => $url,
        ]);
        Mail::to($staffEmail)->send(new WelcomeMail($data));
        $staff->save();
        // flash('User has been added!','success')->important();
        // if (Password::sendResetLink($staffEmail)) {
        //     return response()->json("success");
        // } else {
        //     dd("there is some problem");
        // }
    }
}
