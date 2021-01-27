<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
=======
use App\Providers\RouteServiceProvider;
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
            return redirect('/');
=======
            return redirect(RouteServiceProvider::HOME);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
        }

        return $next($request);
    }
}
