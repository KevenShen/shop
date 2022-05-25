<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;

class BaseController extends Controller
{

    private $baseService;
    private $request;
    private $adminToken;
    public function __construct(Request $request, BaseService $baseService)
    {
        $this->baseService = $baseService;
        $this->request = $request;
    }
    public function index()
    {
        $resadminToken=$this->request['admin_token']
        // return $this->baseService->getAdminBase();
        // $postData = $this->request->header('Admin-Token');
        
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
