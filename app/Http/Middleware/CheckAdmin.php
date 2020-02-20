<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{

    // check loged in user is admin or no
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role == 1) {
            return $next($request);
        }
        return redirect('/')->with('warning','اخطار:شما به صفحه‌ی ادمین دسترسی ندارید.');
    }
}
