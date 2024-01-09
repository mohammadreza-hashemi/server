<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {


        if (/** ! $request->user()->hasRole($role) */ $role !== 'editor') {
            dd('permission denied ! ');
            //redirect you have not permission
        }

        return $next($request);
    }
}
