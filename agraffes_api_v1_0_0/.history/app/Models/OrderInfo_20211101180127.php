<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;
    protected $table = 'goods_gallery';
    protected $primaryKey = 'img_id';
    protected $fillable = array('goods_id', 'img_url', 'img_desc', 'thumb_url', 'img_original', 'single_id', 'external_url', 'front_cover');
    protected $guarded = array();
}
