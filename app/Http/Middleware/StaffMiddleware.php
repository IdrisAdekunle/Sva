<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class StaffMiddleware
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


        if ($request->is('staff'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('View All Staff'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('staff/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create Staff'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('staff/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('Edit Staff')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('Delete Staff')) {
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
