<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;

class Auth
{

    public function handle(Request $request, Closure $next)
    {
        $data = (new AdminAuthService)->authorization($request);
        var_dump($data);
        return $next($request);
    }
}
