<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;
use App\Models\AdminUser;
use App\Services\AuthService\AdminAuthService;

class BaseController extends Controller
{

    public function __construct(private Request $request, private AdminAuthService $adminAuthService, private BaseService $baseService)
    {
    }
    public function index()
    {

        $admin_user_data = $this->adminAuthService->authorization($this->request);
        // if (empty($admin_user_data)) {
        //     $res['data'] = [];
        // } else {
        //     $res['data']['']=
        // }
        // $resadminToken = $this->request['admin_token'];
        // $resData['data'] = $data;
        // $resData['admin_token'] = $resadminToken;
        // return $data;
        return $admin_user_data;
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
