<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;

class Auth
{

    public function handle(Request $request, Closure $next)
    {
        // echo($request);
        $data=new AdminAuthService;
        return $next($request);
    }
}
