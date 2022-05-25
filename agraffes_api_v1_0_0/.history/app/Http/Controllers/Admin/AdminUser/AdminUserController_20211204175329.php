<?php

namespace App\Http\Controllers\Admin\adminUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\AdminUserRepository;
use App\Services\AuthService\AdminAuthService;


class AdminUserController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private Request $request,
        private AdminUserRepository $adminUserRepository,
        private AdminAuthService $adminAuthService,
    ) {
    }

    public function index()
    {
    }

    public function show($id)
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
