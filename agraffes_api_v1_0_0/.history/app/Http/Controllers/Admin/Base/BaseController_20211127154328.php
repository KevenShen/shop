<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;
use App\Services\AuthService\AdminAuthService;

class BaseController extends Controller
{

    public function __construct(private Request $request, private AdminAuthService $adminAuthService, private BaseService $baseService)
    {
    }
    public function index()
    {

        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
            $res['admin_token'] = "";
        } else {
            $res['data']["admin_user"] = ;
            $res['admin_token'] = $admin_user_data['admin_token'];
        }
        return $res;
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
