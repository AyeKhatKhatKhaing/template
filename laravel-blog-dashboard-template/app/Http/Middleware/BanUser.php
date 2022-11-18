<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BanUser
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
        if(Auth::user()->isBanned == 0){
            Auth::logout();
            return redirect()->route('login')->with("alert",["icon"=>"error","title"=>"Your are Banned","message"=>"Admin ကို ဆက်သွယ်ပါ။"]);
        }
        return $next($request);
    }
}
