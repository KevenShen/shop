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
        if ($request->header('admin_token')) {
            echo $request->header('admin_token');
        }

        // $token = $request->header('admin_token');
        return $next($request);
        // if ($data['err'] === 0) {
        //     return $next($request);
        // } else {
        //     return 1;
        // }
        // return $token;
    }
}
