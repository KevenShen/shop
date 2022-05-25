<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;
use App\Models\AdminUser;
use App\Services\AuthService\AdminAuthService;

class BaseController extends Controller
{

    private $baseService;
    private $request;
    private $adminToken;
    public function __construct(private Request $request, private BaseService $baseService)
    {
        $this->baseService = $baseService;
        $this->request = $request;
    }
    public function index()
    {
        $admin_token = $this->request->header('admin_token');
        $adminUser = AdminUser::where('admin_token', $admin_token)->first();
        // $resadminToken = $this->request['admin_token'];
        $data = $this->baseService->getAdminBase($adminUser['id']);
        // $resData['data'] = $data;
        // $resData['admin_token'] = $resadminToken;
        return $data;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
