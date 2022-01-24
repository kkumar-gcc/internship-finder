<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('/resetPassword.forget');
    }

    public function resetForm(string $token)
    {

        return view('/resetPassword.reset')->with(
            ['token' => $token]
        );
    }

    public function resetPassword(Request $request, string $token)
    {

        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        //update staff table with new password
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        Staff::where('email', $tokenData->email)->update(array('password' => Hash::make($request->password)));

        User::where('email', $tokenData->email)->update(array('password' => Hash::make($request->password)));
        //delete password reset row.
        DB::table('password_resets')
            ->where('token', $token)->delete();
        return redirect('/login');
    }
}
