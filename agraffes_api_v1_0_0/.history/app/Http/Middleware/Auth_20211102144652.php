<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;

class Auth
{

    public function handle(Request $request, Closure $next, AdminAuthService $adminAuthService)
    {
        $data = $adminAuthService->authorization($request);
        if($data['err']===0){
            
        }
        return $next($request);
    }
}
