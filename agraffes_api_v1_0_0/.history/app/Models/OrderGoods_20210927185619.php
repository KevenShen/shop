<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderGoods extends Model
{
    use HasFactory;
    protected $table = 'order_goods';
    protected $primaryKey = 'rec_id';
    public $timestamps = false;
    protected $fillable = array('order_id', 'user_id', 'cart_recid', 'goods_id', 'goods_name', 'goods_sn', 'product_id', 'goods_number', 'market_price', 'goods_price', 'goods_attr', 'send_number', 'is_real', 'extension_code', 'parent_id', 'is_gift', 'model_attr', 'goods_attr_id', 'ru_id', 'shopping_fee', 'warehouse_id', 'area_id', 'area_city', 'is_single', 'freight', 'tid', 'shipping_fee', 'drp_money', 'is_distribution', 'commission_rate', 'stages_qishu', 'product_sn', 'is_reality', 'is_return', 'is_fast');
    protected $guarded = array();
    
}
