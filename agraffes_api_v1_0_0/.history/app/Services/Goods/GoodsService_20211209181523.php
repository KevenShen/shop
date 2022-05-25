<?php

namespace App\Services\Goods;

use App\Repositories\Goods\GoodsAttrRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Goods\GoodsGalleryRepository;
use App\Repositories\Goods\GoodsRealGalleryRepository;
use App\Repositories\Category\CategoryGroupRepository;

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
        $goods_attr_data = agg_arr($goods_attr, ["attr_value", "attr_price", "attr_sort", "attr_img"], 11, $handle);
        // $goods_attr = $this->goodsAttrRepository->batchCreateGoodsAttr($goods_attr_data);
        $goods_group_collection = $data['goods_collection_group'];
        $goods_attr_data = agg_arr($goods_group_collection, ["cat_id"],15, $handle);

        // $this->goodsRepository->create()
        return $goods_attr_data;
    }
}
