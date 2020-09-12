<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PlaceOrderMiddleware
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
        if(!empty(Auth::user()) && Auth::user()->type == 'App\CustomerUser')
        {
            return $next($request);
        }
        else
        {
            return redirect('/login')->with('status', 'Please do login to place order');
        }
    }
}
