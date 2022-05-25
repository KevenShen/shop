<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $table = 'ad';
    protected $primaryKey = 'ad_id';
    public $timestamps = false;
    protected $fillable = array('position_id', 'media_type', 'ad_name', 'ad_link', 'link_color', 'b_title', 's_title', 'ad_code', 'ad_bg_code', 'start_time', 'end_time', 'link_man', 'link_email', 'link_phone', 'click_count', 'enabled', 'is_new', 'is_hot', 'is_best', 'public_ruid', 'ad_type', 'goods_name');
    protected $guarded = array();
}
