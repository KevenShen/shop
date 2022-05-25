<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{

    public function handle(Request $request, Closure $next)
    {
        echo $request->header('admin_token');
        return $next($request);
    }
}
