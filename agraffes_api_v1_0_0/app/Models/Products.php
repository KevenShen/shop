<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    protected $fillable = array('goods_id', 'goods_attr', 'product_sn', 'bar_code', 'product_number', 'product_price', 'product_market_price', 'product_warn_number', 'inventoryid');
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
     * Get the value of goods_attr
     */
    public function getGoodsAttr()
    {
        return $this->goods_attr;
    }

    /**
     * Set the value of goods_attr
     * @return  self
     */
    public function setGoodsAttr($value)
    {
        $this->goods_attr = $value;
        return $this;
    }

    /**
     * Get the value of product_sn
     */
    public function getProductSn()
    {
        return $this->product_sn;
    }

    /**
     * Set the value of product_sn
     * @return  self
     */
    public function setProductSn($value)
    {
        $this->product_sn = $value;
        return $this;
    }

    /**
     * Get the value of bar_code
     */
    public function getBarCode()
    {
        return $this->bar_code;
    }

    /**
     * Set the value of bar_code
     * @return  self
     */
    public function setBarCode($value)
    {
        $this->bar_code = $value;
        return $this;
    }

    /**
     * Get the value of product_number
     */
    public function getProductNumber()
    {
        return $this->product_number;
    }

    /**
     * Set the value of product_number
     * @return  self
     */
    public function setProductNumber($value)
    {
        $this->product_number = $value;
        return $this;
    }

    /**
     * Get the value of product_price
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * Set the value of product_price
     * @return  self
     */
    public function setProductPrice($value)
    {
        $this->product_price = $value;
        return $this;
    }

    /**
     * Get the value of product_market_price
     */
    public function getProductMarketPrice()
    {
        return $this->product_market_price;
    }

    /**
     * Set the value of product_market_price
     * @return  self
     */
    public function setProductMarketPrice($value)
    {
        $this->product_market_price = $value;
        return $this;
    }

    /**
     * Get the value of product_warn_number
     */
    public function getProductWarnNumber()
    {
        return $this->product_warn_number;
    }

    /**
     * Set the value of product_warn_number
     * @return  self
     */
    public function setProductWarnNumber($value)
    {
        $this->product_warn_number = $value;
        return $this;
    }

    /**
     * Get the value of inventoryid
     */
    public function getInventoryid()
    {
        return $this->inventoryid;
    }

    /**
     * Set the value of inventoryid
     * @return  self
     */
    public function setInventoryid($value)
    {
        $this->inventoryid = $value;
        return $this;
    }
}
