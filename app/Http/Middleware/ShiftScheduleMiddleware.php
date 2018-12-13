<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ShiftScheduleMiddleware
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

        if ($request->is('date'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create Dates'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }
        if ($request->is('ShiftSchedule'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Schedule Department Shift'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }
        if ($request->is('ShiftSchedule/*/edit'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Change Staff Shift'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        return $next($request);

    }



}
