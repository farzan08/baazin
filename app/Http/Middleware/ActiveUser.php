<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ActiveUser
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
        if (auth()->user()->trash==0) {
            return $next($request);
        }else {
            $user=$request->user();
                Auth::logout();
                return redirect('/')->with('warning', 'اخطار:شما کاربر غیرفعال شناخته شده‌اید.');

            }
    }
}

