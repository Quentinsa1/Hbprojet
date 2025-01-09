<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();

        switch ($user->role) {
            case 'admin':
                return redirect('/admin/dashboard');
            case 'distributor':
                return redirect('/distributor/dashboard');
            case 'stockist':
                return redirect('/stockist/dashboard');
            default:
                return redirect('/home');
        }

        return $next($request);
    }
}
