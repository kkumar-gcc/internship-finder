<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('resetPassword.forget');
    }
    public function resetForm(string $token)
    {
        // dd($request->email);
        // $token = $request;
        // dd($token);
        return view('resetPassword.reset')->with(
            ['token' => $token]
        );
    }
    public function forgotPassword(Request $request)
    {
        $staff = Staff::where('email', $request->email)->first();

        if (!$staff) return redirect()->back()->withErrors(['error' => '404']);

        $expires = date("U") + 1800;

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Str::random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

        foreach ($tokenData as $token) {
            $token = $tokenData->token;
        }

        $email = $request->email;

        $url = "http://127.0.0.1:8000/reset-password/" . $token;

        $useEmail = $request->email;
        $data = ([
            'first_name' => $staff->first_name,
            'last_name' => $staff->last_name,
            'email' => $staff->email,
            'url' => $url,
        ]);
        Mail::to($useEmail)->send(new WelcomeMail($data));
    }
    public function resetPassword(Request $request, string $token)
    {

        // dd($request);
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        //  $token = $request->token;
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        Staff::where('email', $tokenData->email)->update(array('password' => $request->password));

        // dd(Staff::where('email', $tokenData->email));
        DB::table('password_resets')
            ->where('token', $token)->delete();
        // }


    }

    // public function reset(string $token)
    // {
    //     return view('resetPassword.reset', ['token' => $token]);
    // }
}
