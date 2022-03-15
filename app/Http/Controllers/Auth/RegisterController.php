<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RegistrationTypeEnum;
use App\Enums\registrationTypeEnum as EnumsRegistrationTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000',
            'userType' => ['required', 'string', 'max:255'],
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function showRegistrationForm()
    {
        $registration_types = RegistrationTypeEnum::toSelectArray();

        return view('auth.register')
            ->with([
                'registration_types' => $registration_types
            ]);
    }

    protected function create(array $data)
    {
        // $userPhoto = "noimage.png";
        // $userPhoto = date('mdYHis') . uniqid() . '.' . $data['photo']->extension();
        // $data['photo']->move(public_path('ProfilePhoto'), $userPhoto);
        $user = User::create([
            'user_type' => $data['userType'],
            // 'name' => $data['name'],
            'email' => $data['email'],
            // 'profile_image' => $userPhoto,
            'password' => Hash::make($data['password']),
        ]);

        if ($user->user_type == RegistrationTypeEnum::Intern) {
            $this->redirectTo = "/intern/create";
        }
        if ($user->user_type == RegistrationTypeEnum::Organization){
            $this->redirectTo = "/organization/create";
        }
        return $user;
    }
}
