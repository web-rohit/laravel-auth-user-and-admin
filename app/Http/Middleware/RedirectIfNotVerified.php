<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotVerified
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
        if(Auth::user()->verified == 0) {
            auth()->logout();
            return redirect('login')->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return $next($request);
    }
}
