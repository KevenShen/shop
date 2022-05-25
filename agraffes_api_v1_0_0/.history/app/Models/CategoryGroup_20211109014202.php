<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;
    protected $table = 'category_group';
    protected $primaryKey = 'cat_group_id';
    public $timestamps = false;
    protected $fillable = array('union_id', 'shop_name', 'shop_title', 'shop_keywords', 'shop_desc', 'shop_country', 'shop_province', 'shop_city', 'shop_address', 'service_email', 'service_phone', 'shop_closed', 'close_comment', 'shop_logo', 'no_picture', 'admin_logo', 'copyright');
    protected $guarded = array();
}
