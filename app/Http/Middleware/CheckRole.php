<?php

namespace CodeQr\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            # validamos el rol
            return abort(403, "No tienes autorización para ingresar.");
        }
        return $next($request);
    }
}
