<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\support\Facades\Auth;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
<<<<<<< HEAD
        if (!Auth::guard('admin')->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
=======
        if(!Auth::guard('admin')-> check()){
            return redirect('/');
        }
        return $next($request);
    }
}
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
