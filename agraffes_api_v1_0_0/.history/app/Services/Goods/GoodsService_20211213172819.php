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
        private CategoryGroupRepository $categoryGroupRepository,
    ) {
    }

    public function createGoods($data, $handle)
    {

        foreach ($data['goods_gallery']['goods_img'] as $key => $value) {
            $goods_gallery_data[$key]['handle'] = $handle;
            $goods_gallery_data[$key]['img_src'] = $value;
            $goods_gallery_data[$key]['order'] = $key;
        }
        // $goods_img = $this->goodsGalleryRepository->batchCreateGoodGallery($goods_gallery_data);
        // $goods_real_gallery = $data['goods_real_gallery'];
        // foreach ($goods_real_gallery['goods_real_img'] as $key => $value) {
        //     $goods_real_gallery_data[$key]['handle'] = $handle;
        //     $goods_real_gallery_data[$key]['img_src'] = $value;
        //     $goods_real_gallery_data[$key]['order'] = $key;
        // }
        // $goods_real_img = $this->goodsRealGalleryRepository->batchCreateRealGoodGallery($goods_real_gallery_data);
        // $goods_attr_data = agg_arr($data['goods_attr'], ["attr_value", "attr_price", "attr_sort", "attr_img"], 11, $handle);
        // $this->goodsAttrRepository->batchCreateGoodsAttr($goods_attr_data);
        // $goods_group_collection_data = agg_arr($data['goods_collection_group'], ["cat_id"], 15, $handle);
        // $this->categoryGroupRepository->batchCreateGroupCollection($goods_group_collection_data);
        // $data['goods']['goods_img'] = $goods_img;
        // $data['goods']['goods_real_img'] = $goods_real_img;
        // $data['goods']['handle'] = $handle;
        // $create_goods = $this->goodsRepository->create($data['goods']);
        return var_dump($data['goods_gallery']);
    }
}
