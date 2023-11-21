<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(auth()->user()->role === $role){
            return $next($request);
        }else{
            return redirect('/')->with('status','Vous n\'etes pas autoriser a acceder a cette page');
        }
       
       
    }
}
