<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstTimeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->changed_pass == '0')
            {
                    return $next($request);
            }
            else
            {
                return redirect()->back()
                ->with('fail','It is not your first time logging in!');
            }

        }
        else
        {
            return redirect()->back()
            ->with('fail','Access Denied! Please Log-in First');
        }
        return $next($request);
    }
}
