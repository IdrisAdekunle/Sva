<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ShiftMiddleware
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

        if ($request->is('shift'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('View All Shift'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('shift/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create Shift'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('shift/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('Edit Shift')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('Delete Shift')) {
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
