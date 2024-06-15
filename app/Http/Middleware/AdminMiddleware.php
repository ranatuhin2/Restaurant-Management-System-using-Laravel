<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
    public function handle(Request $request, Closure $next)
    {
        if(isset(Auth::user()->id)) {
            $user_type = Auth::user()->user_type;
            if($user_type=='Admin'){
                return $next($request);
            }else{
                return redirect(url('/auth'));
            }

        }else{
            return redirect(url('/auth'));
        }
    }
}
