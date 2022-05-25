<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use App\Services\AuthService\AdminAuthService;

class AuthController extends Controller
{

    public function index(Request $request, AdminAuthService $adminAuthService)
    {
        // $auth = $adminAuthService->authorization($request);
        // return $auth;
        return $request;
    }

    public function show($id)
    {
    }

    public function create()
    {
        //
    }

    public function store(Request $request, AdminAuthService $adminAuthService)
    {
        $auth = $adminAuthService->Login($request);
        return $auth;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
