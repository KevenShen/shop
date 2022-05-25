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


    /**
     * Get the value of goods_id
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Set the value of goods_id
     * @return  self
     */
    public function setGoodsId($value)
    {
        $this->goods_id = $value;
        return $this;
    }

    /**
     * Get the value of cat_id
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Set the value of cat_id
     * @return  self
     */
    public function setCatId($value)
    {
        $this->cat_id = $value;
        return $this;
    }
}
