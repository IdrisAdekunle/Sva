<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LogMiddleware
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
        if ($request->is('logs')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('View Logs')) {

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
