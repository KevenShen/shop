<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = 'rec_id';
    public $timestamps = false;
    protected $fillable = array('user_id', 'session_id', 'goods_id', 'goods_sn', 'product_id', 'group_id', 'goods_name', 'market_price', 'goods_price', 'goods_number', 'goods_attr', 'is_real', 'extension_code', 'parent_id', 'rec_type', 'is_gift', 'is_shipping', 'can_handsel', 'model_attr', 'goods_attr_id', 'ru_id', 'shopping_fee', 'warehouse_id', 'area_id', 'area_city', 'add_time', 'stages_qishu', 'store_id', 'freight', 'tid', 'shipping_fee', 'store_mobile', 'take_time', 'is_checked', 'commission_rate', 'is_invalid', 'act_id');
    protected $guarded = array();

    /**
     * Get the value of rec_id
     */
    public function getRecId()
    {
        return $this->rec_id;
    }

    /**
     * Set the value of rec_id
     * @return  self
     */
    public function setRecId($value)
    {
        $this->rec_id = $value;
        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     * @return  self
     */
    public function setUserId($value)
    {
        $this->user_id = $value;
        return $this;
    }

    /**
     * Get the value of session_id
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set the value of session_id
     * @return  self
     */
    public function setSessionId($value)
    {
        $this->session_id = $value;
        return $this;
    }

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
     * Get the value of goods_sn
     */
    public function getGoodsSn()
    {
        return $this->goods_sn;
    }

    /**
     * Set the value of goods_sn
     * @return  self
     */
    public function setGoodsSn($value)
    {
        $this->goods_sn = $value;
        return $this;
    }

    /**
     * Get the value of product_id
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     * @return  self
     */
    public function setProductId($value)
    {
        $this->product_id = $value;
        return $this;
    }

    /**
     * Get the value of group_id
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set the value of group_id
     * @return  self
     */
    public function setGroupId($value)
    {
        $this->group_id = $value;
        return $this;
    }

    /**
     * Get the value of goods_name
     */
    public function getGoodsName()
    {
        return $this->goods_name;
    }

    /**
     * Set the value of goods_name
     * @return  self
     */
    public function setGoodsName($value)
    {
        $this->goods_name = $value;
        return $this;
    }

    /**
     * Get the value of market_price
     */
    public function getMarketPrice()
    {
        return $this->market_price;
    }

    /**
     * Set the value of market_price
     * @return  self
     */
    public function setMarketPrice($value)
    {
        $this->market_price = $value;
        return $this;
    }

    /**
     * Get the value of goods_price
     */
    public function getGoodsPrice()
    {
        return $this->goods_price;
    }

    /**
     * Set the value of goods_price
     * @return  self
     */
    public function setGoodsPrice($value)
    {
        $this->goods_price = $value;
        return $this;
    }

    /**
     * Get the value of goods_number
     */
    public function getGoodsNumber()
    {
        return $this->goods_number;
    }

    /**
     * Set the value of goods_number
     * @return  self
     */
    public function setGoodsNumber($value)
    {
        $this->goods_number = $value;
        return $this;
    }

    /**
     * Get the value of is_real
     */
    public function getIsReal()
    {
        return $this->is_real;
    }

    /**
     * Set the value of is_real
     * @return  self
     */
    public function setIsReal($value)
    {
        $this->is_real = $value;
        return $this;
    }

    /**
     * Get the value of extension_code
     */
    public function getExtensionCode()
    {
        return $this->extension_code;
    }

    /**
     * Set the value of extension_code
     * @return  self
     */
    public function setExtensionCode($value)
    {
        $this->extension_code = $value;
        return $this;
    }

    /**
     * Get the value of parent_id
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set the value of parent_id
     * @return  self
     */
    public function setParentId($value)
    {
        $this->parent_id = $value;
        return $this;
    }

    /**
     * Get the value of rec_type
     */
    public function getRecType()
    {
        return $this->rec_type;
    }

    /**
     * Set the value of rec_type
     * @return  self
     */
    public function setRecType($value)
    {
        $this->rec_type = $value;
        return $this;
    }

    /**
     * Get the value of model_attr
     */
    public function getModelAttr()
    {
        return $this->model_attr;
    }

    /**
     * Set the value of model_attr
     * @return  self
     */
    public function setModelAttr($value)
    {
        $this->model_attr = $value;
        return $this;
    }

    /**
     * Get the value of ru_id
     */
    public function getRuId()
    {
        return $this->ru_id;
    }

    /**
     * Set the value of ru_id
     * @return  self
     */
    public function setRuId($value)
    {
        $this->ru_id = $value;
        return $this;
    }

    /**
     * Get the value of add_time
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Set the value of add_time
     * @return  self
     */
    public function setAddTime($value)
    {
        $this->add_time = $value;
        return $this;
    }

    /**
     * Get the value of tid
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set the value of tid
     * @return  self
     */
    public function setTid($value)
    {
        $this->tid = $value;
        return $this;
    }

    /**
     * Get the value of take_time
     */
    public function getTakeTime()
    {
        return $this->take_time;
    }

    /**
     * Set the value of take_time
     * @return  self
     */
    public function setTakeTime($value)
    {
        $this->take_time = $value;
        return $this;
    }

    /**
     * Get the value of is_checked
     */
    public function getIsChecked()
    {
        return $this->is_checked;
    }

    /**
     * Set the value of is_checked
     * @return  self
     */
    public function setIsChecked($value)
    {
        $this->is_checked = $value;
        return $this;
    }

    /**
     * Get the value of is_invalid
     */
    public function getIsInvalid()
    {
        return $this->is_invalid;
    }

    /**
     * Set the value of is_invalid
     * @return  self
     */
    public function setIsInvalid($value)
    {
        $this->is_invalid = $value;
        return $this;
    }
}
