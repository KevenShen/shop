<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsRealGallery extends Model
{
    use HasFactory;
    protected $table = 'goods_real_gallery';
    protected $primaryKey = 'img_id';
    public $timestamps = false;
    protected $fillable = array('goods_id', 'handle', 'img_src', 'img_desc', 'img_original', 'order');
    protected $guarded = array();
}
