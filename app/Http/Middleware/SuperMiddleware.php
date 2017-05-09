<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperMiddleware
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
     //        echo $user->id; die();
        if($user->hasRole('super')){
            return $next($request);
        } else {
            return response(view('auth.unauthorized'), 404);
        }
    }
}
