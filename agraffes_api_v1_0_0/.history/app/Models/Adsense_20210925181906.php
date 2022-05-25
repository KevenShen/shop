<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adsense extends Model
{
    use HasFactory;
    protected $table = 'adsense';
    public $timestamps = false;
    protected $fillable = array('from_ad', 'referer', 'clicks');
    protected $guarded = array();
}
