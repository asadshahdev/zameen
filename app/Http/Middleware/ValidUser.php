<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{

    private $client = "client";
    private $dealer = "dealer";

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,): Response
    {            
       /* $userrole = Auth::User()->role;
        if ($userrole === 'client' && $role === 'client'){
            return $next($request);
        }elseif($userrole === 'dealer' && $role === 'dealer'){
            return $next($request);
        }else{
            return redirect()->route('login');
        }*/
        
        /*if (Auth::User()->role == $role){
            return $next($request);
        }elseif(Auth::User()->role == "client"){
            return redirect()->route('dealerdashboard');
        }else{
            return redirect()->route('login');
        }*/


        
        if(Auth::check()){
            
            if($this->client === Auth::user()->role){
                return redirect()->route('clientdashboard');
            }

            if($this->dealer === Auth::user()->role){
                return redirect()->route('dashboard');
            }

        }else{
            return redirect()->route('login');
        }
        
    }
}
