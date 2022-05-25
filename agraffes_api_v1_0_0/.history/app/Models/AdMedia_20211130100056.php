<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdMedia extends Model
{
    use HasFactory;
    protected $table = 'ad';
    protected $primaryKey = 'ad_id';
    public $timestamps = false;
    protected $fillable = array(

    );
    protected $guarded = array();
}
