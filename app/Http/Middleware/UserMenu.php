<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class UserMenu {
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response {
        $menu = [];
        $route = '';
        if(auth()->user()->hasRole('admin')) {
            $menu = config('menu')['admin'];
            $route = 'admin';
        } else if(auth()->user()->hasRole('patient') && !auth()->user()->disabled) {
            $menu = config('menu')['patient'];
            $route = 'patient';
        } else {
            auth()->logout();
            return redirect()->route('login');
        }
        View::share('menu', $menu);


        $prefix = explode('/', ltrim(\Route::current()->getPrefix(), '/'))[0];

        if($prefix == $route) {
            return $next($request);
        }

        return redirect()->route(($route.'.dashboard'));

    }
}
