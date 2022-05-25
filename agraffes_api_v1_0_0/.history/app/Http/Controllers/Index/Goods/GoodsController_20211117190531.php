<?php

namespace App\Http\Controllers\Index\Goods;

use App\Http\Controllers\Controller;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Goods\GoodsAttrRepository;
use App\Repositories\Goods\GoogsGalleryRepository;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    private $goodsRepository;
    private $goodsAttrRepository;
    private $googsGalleryRepository;
    public function __construct(GoodsRepository $goodsRepository, GoodsAttrRepository $goodsAttrRepository, GoogsGalleryRepository $googsGalleryRepository)
    {
        $this->goodsRepository = $goodsRepository;
        $this->goodsAttrRepository=$goodsAttrRepository;
        $this->googsGalleryRepository=$googsGalleryRepository;
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
