<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsOrganizationComplete
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
        if (!auth()->user()->user_type == 'Organization') {
            return abort(code: 404);
        } else {
            if (!(auth()->user()->complete)) {
                return  redirect('organization/create');
            }

            return $next($request);
        }
    }
}
