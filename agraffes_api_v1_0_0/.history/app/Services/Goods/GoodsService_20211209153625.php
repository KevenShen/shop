<?php

namespace App\Services\Goods;

use App\Repositories\Goods\GoodsAttrRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Goods\GoodsGalleryRepository;
use App\Repositories\Goods\GoodsRealGalleryRepository;

class GoodsService
{
    public function __construct(
        private GoodsAttrRepository $goodsAttrRepository,
        private GoodsRepository $goodsRepository,
        private GoodsGalleryRepository $goodsGalleryRepository,
        private GoodsRealGalleryRepository $goodsRealGalleryRepository,
    ) {
    }

    public function createGoods($data)
    {
        return $data;
    }
}
