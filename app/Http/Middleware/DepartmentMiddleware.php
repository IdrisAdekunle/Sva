<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DepartmentMiddleware
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
        if ($request->is('departments'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('View Department'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('departments/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('Create Department'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('departments/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('Edit Department')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('Delete Department')) {
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
