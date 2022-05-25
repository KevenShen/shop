<?php

namespace App\Http\Controllers\Index\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\Index\IndexService;

class IndexController extends Controller
{
    private $indexService;
    public function __construct(IndexService $indexService)
    {
        $this->indexService = $indexService;
    }

    public function index()
    {
        $resData = $this->indexService->getIndex();
        return $resData;
    }


    public function store(Request $request)
    {
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

    public function register($request)
    {
    }
}
