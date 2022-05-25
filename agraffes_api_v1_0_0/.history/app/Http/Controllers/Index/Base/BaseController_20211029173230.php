<?php

namespace App\Http\Controllers\Index\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;

class BaseController extends Controller
{

    public function __construct(){
        
    }
    public function index(BaseService $baseService)
    {
        $resData['data']=$baseService->getBase();
        return $resData;
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        
    }
}
