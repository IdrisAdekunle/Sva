<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ViewMiddleware
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
        if ($request->is('view'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('View Staff'))
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
