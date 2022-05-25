<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{

    public function handle(Request $request, Closure $next)
    {
        $adminToken = $request->header('Admin-Token');
        echo ($adminToken);
        return $next($request);
    }
}
