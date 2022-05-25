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
        if ($data['err'] === 0) {
            $resToken = ['admin_token' => $data['data']['admin_token'], 'admin_id' => $data['data']['id']];
            $request->merge($resToken);
            return $next($request);
        } else {
            return $data;
        }
    }
}
