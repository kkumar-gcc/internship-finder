<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


         /* define a  user type */
 
         Gate::define('isIntern', function($user) {
 
             return $user->user_type == 'Intern';
 
         });
 
       
        //  Gate::define('isOrganization', function($user) {
 
        //      return $user->user_type == 'Organization';
 
        //  });
         
         Gate::define('isOrganization', function ($user) {
            if ($user->user_type == 'Organization') {
                return true;
            }
            return false;
        });

    }
}
