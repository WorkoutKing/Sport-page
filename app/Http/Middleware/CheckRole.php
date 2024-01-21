<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (!Auth::check() || !Auth::user()->hasRole($role)) {
                abort(403, 'Unauthorized action.');
            }
        }

        return $next($request);
    }
}
