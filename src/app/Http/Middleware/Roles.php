<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $rolesMap = [
            "admin" => Role::IS_ADMIN,
            "delevery" => Role::IS_DELEVERY,
            "client" => Role::IS_CLIENT
        ];
        if (!Auth::check()) {
            return Response("access denied", 403);
        }
        if ($request->user()->role_id == Role::IS_ADMIN) {
            return $next($request);
        }

        foreach ($roles as $role) {
            if ($request->user()->role_id == $rolesMap[$role]) {
                return $next($request);
            }
        }
    }
}
