<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $user = Auth::user();

       // echo $user->hasRole('super'); die();
        if($user->hasRole('super') || $user->hasRole('admin')){
            return $next($request);
        } else {
            return response(view('auth.unauthorized'), 404);
        }
    }
}
