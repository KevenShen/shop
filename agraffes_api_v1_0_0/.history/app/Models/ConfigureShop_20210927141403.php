<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigureShop extends Model
{
    use HasFactory;
    protected $table = 'shop_config';
	public $timestamps = false;
	protected $fillable = array('parent_id', 'code', 'type', 'store_range', 'store_dir', 'value', 'sort_order', 'shop_group');
	protected $guarded = array();

    
}
