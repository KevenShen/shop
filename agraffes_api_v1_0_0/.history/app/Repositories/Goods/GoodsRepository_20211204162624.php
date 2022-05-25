<?php

namespace App\Repositories\Goods;

use App\Models\Goods;
use App\Models\GoodsGallery;
use App\Models\GoodsAttr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class GoodsRepository
{
    private $model;
    private $modeltable;
    const MediaPath = ProductMedia;
    public function __construct(Goods $goods)
    {
        $this->model = $goods;
        $this->modeltable = 'goods';
    }
}
