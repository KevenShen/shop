<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    use HasFactory;
    protected $table = 'goods_attr';
    protected $primaryKey = 'goods_attr_id';
    public $timestamps = false;
    protected $fillable = array('goods_id', 'attr_value', 'attr_price', 'attr_sort', 'attr_img');
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
     * Get the value of attr_value
     */
    public function getAttrValue()
    {
        return $this->attr_value;
    }

    /**
     * Set the value of attr_value
     * @return  self
     */
    public function setAttrValue($value)
    {
        $this->attr_value = $value;
        return $this;
    }

    /**
     * Get the value of attr_price
     */
    public function getAttrPrice()
    {
        return $this->attr_price;
    }

    /**
     * Set the value of attr_price
     * @return  self
     */
    public function setAttrPrice($value)
    {
        $this->attr_price = $value;
        return $this;
    }

    /**
     * Get the value of attr_sort
     */
    public function getAttrSort()
    {
        return $this->attr_sort;
    }

    /**
     * Set the value of attr_sort
     * @return  self
     */
    public function setAttrSort($value)
    {
        $this->attr_sort = $value;
        return $this;
    }

    /**
     * Get the value of attr_img
     */
    public function getAttrImg()
    {
        return $this->attr_img;
    }

    /**
     * Set the value of attr_img
     * @return  self
     */
    public function setAttrImg($value)
    {
        $this->attr_img = $value;
        return $this;
    }
}
