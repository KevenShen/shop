<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsCat extends Model
{
    use HasFactory;
    protected $table = 'goods_cat';
    public $timestamps = false;
    protected $fillable = array('goods_id', 'cat_id');
    protected $guarded = array();
}
