<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;

class Auth
{

    public function handle(Request $request, Closure $next, AdminAuthService $AdminAuthService)
    {
        // echo($request);

        return $next($request);
    }
}
