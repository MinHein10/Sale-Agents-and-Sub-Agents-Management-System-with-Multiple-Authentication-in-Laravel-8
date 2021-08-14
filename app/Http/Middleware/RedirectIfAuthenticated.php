<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }

        if($guard=="subagent" && Auth::guard($guard)->check()){
            return redirect('/subagent');
        }


        if ($guard == "agent" && Auth::guard($guard)->check() ) {
                    if ( Auth::guard($guard)->user() ||
                    (Auth::guard($guard)->user() instanceof MustVerifyEmail &&
                     Auth::guard($guard)->user()->hasVerifiedEmail())) {
                        return redirect('/agent');
                    }

                }


        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }


        return $next($request);
    }
}
