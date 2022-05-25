<?php

namespace App\Http\Controllers\Index\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\Index\IndexService;
use App\Repositories\Goods\GoodsRepository;

class IndexController extends Controller
{
    private $indexService;
    private $goodsRepository;
    public function __construct(IndexService $indexService, GoodsRepository $goodsRepository)
    {
        $this->indexService = $indexService;
        $this->goodsRepository = $goodsRepository;
    }

    public function index()
    {
        // $data = $this->goodsRepository->leftJoin($table = "goods_attr|goods_gallery", $localPrimary = "handle", $primary = "handle");
        $resData = $this->indexService->getIndex();
        return $resData;
        // return $data;
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
