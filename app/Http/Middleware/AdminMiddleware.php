<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            // Redireciona ou aborta com erro 403
            abort(403, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}
