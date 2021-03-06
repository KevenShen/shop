<?php

namespace App\Repositories\Goods;
use App\Models\VolumePrice;

class VolumePriceRepository
{
    public function allVolumes($goods_id,$price_type){
        $res=VolumePrice::where('good_id',$goods_id)->where('price_type',$price_type)->orderBy('volume_number');
    }
}