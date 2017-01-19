<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class AdminAuthentication
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        //print_r($auth);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        //echo "Admin ".$this->auth->check();
        if(Auth::guard($guard)->check()){
            if($this->auth->user()->is_admin == true){
                return $next($request);
            }
        }
        return new RedirectResponse(url('/home'));
    }
}
