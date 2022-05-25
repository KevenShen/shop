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
    protected $fillable = array('goods_id', 'cat_one', 'cat_two', 'cat_three');
    protected $guarded = array();
}
