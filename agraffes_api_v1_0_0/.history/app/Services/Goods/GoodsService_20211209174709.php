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
        // $goods_img = $this->goodsGalleryRepository->batchCreateGoodGallery($goods_gallery_data);
        $goods_real_gallery = $data['goods_real_gallery'];
        foreach ($goods_real_gallery['goods_real_img'] as $key => $value) {
            $goods_real_gallery_data[$key]['handle'] = $handle;
            $goods_real_gallery_data[$key]['img_src'] = $value;
            $goods_real_gallery_data[$key]['order'] = $key;
        }
        // $goods_real_img = $this->goodsRealGalleryRepository->batchCreateRealGoodGallery($goods_real_gallery_data);
        $goods_attr = $data['goods_attr'];
        $goods_attr_data=agg_arr($goods_attr, ["attr_value", "attr_price", "attr_sort", "attr_img"])
        // foreach ($goods_category_group as $key => $value) {
        //     $goods_category_group_item['handle'] = $handle;
        //     $goods_category_group_item['cat_id'] = $value;
            
        //     array_push($arr = [], $goods_category_group_item);
        // }
        // $this->goodsRepository->create()
        return $goods_goods_attr;
    }
}
