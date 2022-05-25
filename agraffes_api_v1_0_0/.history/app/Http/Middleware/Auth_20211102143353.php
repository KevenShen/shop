<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{

    public function handle(Request $request, Closure $next)
    {
        $adminToken = $this->request->header('Admin-Token');
        return $next($request);
    }
}
