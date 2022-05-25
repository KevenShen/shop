<?php

namespace App\Http\Controllers\Index\Goods;

use App\Http\Controllers\Controller;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Goods\GoodsAttrRepository;
use App\Repositories\Goods\GoodsGalleryRepository;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    private $goodsRepository;
    private $goodsAttrRepository;
    private $goodsGalleryRepository;
    public function __construct(GoodsRepository $goodsRepository, GoodsAttrRepository $goodsAttrRepository, GoodsGalleryRepository $goodsGalleryRepository)
    {
        $this->goodsRepository = $goodsRepository;
        $this->goodsAttrRepository = $goodsAttrRepository;
        $this->goodsGalleryRepository = $goodsGalleryRepository;
    }
    public function index()
    {
        //
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
        $resData['goods'] = $this->goodsRepository->findBy("handle={$id}");
        $resData['goods']['goods_attr'] = $this->goodsAttrRepository->findBy("handle={$id}");
        $resData['goods']['goods_gallery'] = $this->goodsGalleryRepository->findBy("handle={$id}");
        return $resData;
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
