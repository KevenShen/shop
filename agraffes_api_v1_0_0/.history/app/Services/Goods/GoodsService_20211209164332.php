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

    public function createGoods($data, $handle)
    {
        $goods_gallery = $data['goods_gallery'];
        foreach ($goods_gallery['goods_img'] as $key => $value) {
            $goods_gallery_data[$key]['handle'] = $handle;
            $goods_gallery_data[$key]['img_src'] = $value;
            $goods_gallery_data[$key]['order'] = $key;
        }
        $goods_real_gallery = $data['goods_real_gallery'];
        foreach ($goods_real_gallery['goods_real_img'] as $key => $value) {
            $goods_real_gallery_data[]['handle'] = $handle;
            $goods_real_gallery_data[]['img_src'] = $value;
            $goods_real_gallery_data[]['order'] = $key;
        }
        $goods_category_group = $data['goods_category_group'];
        foreach ($goods_category_group as $key => $value) {
            $goods_category_group_data[]['handle'] = $handle;
            $goods_category_group_data[]['cat_id'] = $value;
        }
        // $this->goodsRepository->create()
        return dd($goods_gallery_data);
    }
}
