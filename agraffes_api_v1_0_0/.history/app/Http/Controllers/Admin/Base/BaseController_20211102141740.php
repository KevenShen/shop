<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;

class BaseController extends Controller
{

    private $baseService;
    private $request;
    public function __construct(BaseService $baseService, Request $request)
    {
        $this->baseService = $baseService;
        $this->request = $request;
    }
    public function index()
    {
        // return $this->baseService->getAdminBase();
        $data = $this->request->all();
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
