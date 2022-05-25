<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    use HasFactory;
    protected $table = 'goods_attr';
	protected $primaryKey = 'goods_attr_id';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'attr_id', 'attr_value', 'color_value', 'attr_price', 'attr_sort', 'attr_img_flie', 'attr_gallery_flie', 'attr_img_site', 'attr_checked', 'attr_value1', 'lang_flag', 'attr_img', 'attr_thumb', 'img_flag', 'attr_pid', 'admin_id', 'cloud_id');
	protected $guarded = array();
}
