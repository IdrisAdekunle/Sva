<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->is('users'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('View All Users'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('users/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create User'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('users/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('Edit User')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('Delete User')) {
                abort('401');
            }
            else
            {
                return $next($request);
            }


        }
        return $next($request);
    }
}
