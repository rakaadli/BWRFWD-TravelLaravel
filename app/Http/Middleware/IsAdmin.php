<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
<<<<<<< HEAD
        if (Auth::user() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        }

=======
        if(Auth::user() && Auth::user()->roles== 'ADMIN'){
            return $next($request);
        }
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
        return redirect('/');
    }
}
