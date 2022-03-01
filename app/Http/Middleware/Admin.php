<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (!Auth::check()) {
        //     return redirect()->route('login');
        // }
        // if (auth()->user()->user_type == 'Organization') {
        //     return redirect()->route('organization');
        // }

        // if (auth()->user()->user_type == 'Intern') {
        //     return redirect()->route('intern');
        // }

       
        if (!auth()->user()->user_type == 'Admin') {
            return back();
        } 
        return $next($request); 
    }
}
