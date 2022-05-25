<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolumePrice extends Model
{
    use HasFactory;
    protected $table = 'volume_price';
    public $timestamps = false;
    protected $fillable = array('price_type', 'goods_id', 'volume_number', 'volume_price');
    protected $guarded = array();
}
