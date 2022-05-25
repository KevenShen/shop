<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;

class Auth
{

    public function handle(Request $request, Closure $next, AdminAuthService $adminAuthService)
    {
        echo($request);
        $data = $adminAuthService->authorization($request);
        if ($data['err'] === 0) {
            return $next($request);
        } else {
            // return $data;
            return 1;

        }
    }
}
