<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdSubject extends Model
{
    use HasFactory;
    protected $table = 'ad_subject';
    protected $primaryKey = 'ad_subject_id';
    protected $fillable = array(
        'banner_img_url', 'banner_img_link', 'banner_img_desc', 'banner_img_order'
    );
    protected $guarded = array();
}
