<?php

namespace App\Http\Middleware;

use App\Models\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<h3>this is middlware</h3>";
        if(Auth::check()){
                return view 
        }
        return $next($request);
    }
}
