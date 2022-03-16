<?php

namespace App\Providers;

use App\Models\Proposel;
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
 
       
         Gate::define('isOrganization', function($user) {
             return $user->user_type == 'Organization';
         });

         Gate::define('isNotActive',function($user){
            return $user->intern->status !='Active';
         });
         Gate::define('isActive',function($user){
            return $user->intern->status =='Active';
         });

       Gate::define('isOwner',function($user,$history){
            return $history->owner==$user->user_type;
         });

    }
}
