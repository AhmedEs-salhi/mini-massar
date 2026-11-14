<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
//        dd($role);
        if (! $request->user() | strtolower($request->user()->role) !== $role) {
            abort(403, 'Unauthorized Action');
        }
        return $next($request);
    }
}
