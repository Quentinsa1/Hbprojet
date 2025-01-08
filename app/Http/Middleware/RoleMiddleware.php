<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role ? Auth::user()->role->name : 'none';
            if ($userRole === $role) {
                return $next($request);
            }

            abort(403, "Accès non autorisé : rôle requis ($role), rôle actuel ($userRole)");
        }

        abort(403, 'Accès non autorisé : utilisateur non authentifié');
    }

}
