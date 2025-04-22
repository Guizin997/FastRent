<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->is_admin) {
            // Se for admin, nega acesso à área de usuário
            abort(403, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}
