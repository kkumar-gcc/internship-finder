<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RegistrationTypeEnum;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        $userType = auth()->user()->user_type;
        // dd($userType);
        
        switch ($userType) {
            case 'Admin':
            $this->redirectTo = '/admin/dashboard';
            return $this->redirectTo;
                break;
            case 'Organization':
                $this->redirectTo = '/organization/dashboard';
                return $this->redirectTo;
                break;
            case 'Intern':
                    $this->redirectTo = '/intern/dashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/dashboard'; //if user doesn't have any role
                return $this->redirectTo;
        }
    }
    // public function redirectTo()
    // {

    //     $userType = auth()->user()->user_type;
    //     if ($userType == RegistrationTypeEnum::Intern) {
    //         return '/intern-dashboard';
    //     }
    //     if ($userType == RegistrationTypeEnum::Organisation) {
    //         return '/organisation-dashboard';
    //     }
    //     if (auth()->user()->user_type == "Staff") {
    //         return '/organisation-dashboard';
    //     }
        
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
