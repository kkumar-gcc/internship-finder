<?php

namespace App\CommandClass;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffCommand
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newStaff(array $formData)
    {
        $rules = [
            'email' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
        ];

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            return ['success' => false, 'data' => $validator->errors(), 400];
        }

        //create a new staff
        $staff = new Staff();
        $this->saveStaffData($formData, $staff);
    }

    public function updateStaff(array $formData, int $id)
    {

        $rules = [
            'email' => ['required|email'],
            'first_name' => ['required'],
            'last_name' => ['required'],
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
        $quickpass = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyz0123456789', 10)), 0, 10);

        $imageName = "noimage.png";

        if ($formData['photo']) {
            $imageName = date('mdYHis') . uniqid() . '.' . $formData['photo']->extension();
            $formData['photo']->move(public_path('ProfilePhoto'), $imageName);
        }
        
        $staff->organization_id = auth()->user()->organization->id;
        $staff->email = $formData['email'];
        $staff->first_name = $formData['first_name'];
        $staff->last_name = $formData['last_name'];
        $staff->company_status = "Staff";
        $staff->profile_image = $imageName;
        $staff->password = Hash::make($quickpass);
        $staff->save();

        //add staff to user's table
        $user = new User();
        $user->user_type = "Staff";
        $user->name = $formData['first_name'];
        $user->email = $formData['email'];
        $user->password = Hash::make($quickpass);
        $user->profile_image = $imageName;
        $user->save();


        $staffEmail = $formData['email'];

        //to set token in database for password resets
        DB::table('password_resets')->insert([
            'email' => $staffEmail,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);


        $tokenData = DB::table('password_resets')
            ->where('email', $staffEmail)->first();

        $token = $tokenData->token;

        $url = "http://127.0.0.1:8000/reset-password/" . $token;


        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'postmaster@sandbox944f15ffd1004c87a9d75336fa38b7d3.mailgun.org';   // SMTP username
        $mail->Password = 'f8b6e33d93d0dee8e273834aaf8db660-156db0f1-8b6a5c66';                          // SMTP password
        $mail->SMTPSecure = 'tlhttps://www.mailgun.com/email-apis';                            // Enable encryption, only 'tls' is accepted
        $mail->Port = 587;
        $mail->From = 'gkalu30@gmail.com';
        $mail->FromName = 'noreply';
        $mail->addAddress('chisom5710@gmail.com');                 // Add a recipient

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

        $mail->Subject = 'Set Password Link';
        $mail->Body = $url;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
