<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;
    protected $table = 'order_info';
    protected $primaryKey = 'order_id';
    protected $fillable = array('main_order_id', 'order_sn', 'user_id', 'order_status', 'consignee', 'country', 'province', 'city', 'district', 'street', 'address', 'zipcode', 'tel', 'mobile', 'email', 'postscript', 'shipping_id', 'shipping_name', 'shipping_code', 'shipping_type', 'goods_amount', 'order_amount', 'from_ad', 'add_time', 'confirm_time', 'shipping_time', 'to_buyer', 'pay_note', 'is_separate', 'parent_id', 'is_delete', 'sign_time', 'is_single', 'point_id', 'shipping_dateStr', 'froms', 'is_frozen', 'main_count');
    protected $guarded = array();

    /**
     * Get the value of main_order_id
     */
    public function getMainOrderId()
    {
        return $this->main_order_id;
    }

    /**
     * Set the value of main_order_id
     * @return  self
     */
    public function setMainOrderId($value)
    {
        $this->main_order_id = $value;
        return $this;
    }

    /**
     * Get the value of order_sn
     */
    public function getOrderSn()
    {
        return $this->order_sn;
    }

    /**
     * Set the value of order_sn
     * @return  self
     */
    public function setOrderSn($value)
    {
        $this->order_sn = $value;
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
     * Get the value of order_status
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Set the value of order_status
     * @return  self
     */
    public function setOrderStatus($value)
    {
        $this->order_status = $value;
        return $this;
    }

    /**
     * Get the value of consignee
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Set the value of consignee
     * @return  self
     */
    public function setConsignee($value)
    {
        $this->consignee = $value;
        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     * @return  self
     */
    public function setCountry($value)
    {
        $this->country = $value;
        return $this;
    }

    /**
     * Get the value of province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set the value of province
     * @return  self
     */
    public function setProvince($value)
    {
        $this->province = $value;
        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     * @return  self
     */
    public function setCity($value)
    {
        $this->city = $value;
        return $this;
    }

    /**
     * Get the value of district
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of district
     * @return  self
     */
    public function setDistrict($value)
    {
        $this->district = $value;
        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     * @return  self
     */
    public function setStreet($value)
    {
        $this->street = $value;
        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     * @return  self
     */
    public function setAddress($value)
    {
        $this->address = $value;
        return $this;
    }

    /**
     * Get the value of zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set the value of zipcode
     * @return  self
     */
    public function setZipcode($value)
    {
        $this->zipcode = $value;
        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     * @return  self
     */
    public function setTel($value)
    {
        $this->tel = $value;
        return $this;
    }

    /**
     * Get the value of mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set the value of mobile
     * @return  self
     */
    public function setMobile($value)
    {
        $this->mobile = $value;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * @return  self
     */
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }

    /**
     * Get the value of postscript
     */
    public function getPostscript()
    {
        return $this->postscript;
    }

    /**
     * Set the value of postscript
     * @return  self
     */
    public function setPostscript($value)
    {
        $this->postscript = $value;
        return $this;
    }

    /**
     * Get the value of shipping_id
     */
    public function getShippingId()
    {
        return $this->shipping_id;
    }

    /**
     * Set the value of shipping_id
     * @return  self
     */
    public function setShippingId($value)
    {
        $this->shipping_id = $value;
        return $this;
    }

    /**
     * Get the value of shipping_name
     */
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    /**
     * Set the value of shipping_name
     * @return  self
     */
    public function setShippingName($value)
    {
        $this->shipping_name = $value;
        return $this;
    }

    /**
     * Get the value of shipping_code
     */
    public function getShippingCode()
    {
        return $this->shipping_code;
    }

    /**
     * Set the value of shipping_code
     * @return  self
     */
    public function setShippingCode($value)
    {
        $this->shipping_code = $value;
        return $this;
    }

    /**
     * Get the value of shipping_type
     */
    public function getShippingType()
    {
        return $this->shipping_type;
    }

    /**
     * Set the value of shipping_type
     * @return  self
     */
    public function setShippingType($value)
    {
        $this->shipping_type = $value;
        return $this;
    }

    /**
     * Get the value of goods_amount
     */
    public function getGoodsAmount()
    {
        return $this->goods_amount;
    }

    /**
     * Set the value of goods_amount
     * @return  self
     */
    public function setGoodsAmount($value)
    {
        $this->goods_amount = $value;
        return $this;
    }

    /**
     * Get the value of order_amount
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    /**
     * Set the value of order_amount
     * @return  self
     */
    public function setOrderAmount($value)
    {
        $this->order_amount = $value;
        return $this;
    }

    /**
     * Get the value of from_ad
     */
    public function getFromAd()
    {
        return $this->from_ad;
    }

    /**
     * Set the value of from_ad
     * @return  self
     */
    public function setFromAd($value)
    {
        $this->from_ad = $value;
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
     * Get the value of confirm_time
     */
    public function getConfirmTime()
    {
        return $this->confirm_time;
    }

    /**
     * Set the value of confirm_time
     * @return  self
     */
    public function setConfirmTime($value)
    {
        $this->confirm_time = $value;
        return $this;
    }

    /**
     * Get the value of shipping_time
     */
    public function getShippingTime()
    {
        return $this->shipping_time;
    }

    /**
     * Set the value of shipping_time
     * @return  self
     */
    public function setShippingTime($value)
    {
        $this->shipping_time = $value;
        return $this;
    }

    /**
     * Get the value of to_buyer
     */
    public function getToBuyer()
    {
        return $this->to_buyer;
    }

    /**
     * Set the value of to_buyer
     * @return  self
     */
    public function setToBuyer($value)
    {
        $this->to_buyer = $value;
        return $this;
    }

    /**
     * Get the value of pay_note
     */
    public function getPayNote()
    {
        return $this->pay_note;
    }

    /**
     * Set the value of pay_note
     * @return  self
     */
    public function setPayNote($value)
    {
        $this->pay_note = $value;
        return $this;
    }

    /**
     * Get the value of is_separate
     */
    public function getIsSeparate()
    {
        return $this->is_separate;
    }

    /**
     * Set the value of is_separate
     * @return  self
     */
    public function setIsSeparate($value)
    {
        $this->is_separate = $value;
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
     * Get the value of is_delete
     */
    public function getIsDelete()
    {
        return $this->is_delete;
    }

    /**
     * Set the value of is_delete
     * @return  self
     */
    public function setIsDelete($value)
    {
        $this->is_delete = $value;
        return $this;
    }

    /**
     * Get the value of sign_time
     */
    public function getSignTime()
    {
        return $this->sign_time;
    }

    /**
     * Set the value of sign_time
     * @return  self
     */
    public function setSignTime($value)
    {
        $this->sign_time = $value;
        return $this;
    }

    /**
     * Get the value of is_single
     */
    public function getIsSingle()
    {
        return $this->is_single;
    }

    /**
     * Set the value of is_single
     * @return  self
     */
    public function setIsSingle($value)
    {
        $this->is_single = $value;
        return $this;
    }

    /**
     * Get the value of point_id
     */
    public function getPointId()
    {
        return $this->point_id;
    }

    /**
     * Set the value of point_id
     * @return  self
     */
    public function setPointId($value)
    {
        $this->point_id = $value;
        return $this;
    }

    /**
     * Get the value of shipping_dateStr
     */
    public function getShippingDatestr()
    {
        return $this->shipping_dateStr;
    }

    /**
     * Set the value of shipping_dateStr
     * @return  self
     */
    public function setShippingDatestr($value)
    {
        $this->shipping_dateStr = $value;
        return $this;
    }

    /**
     * Get the value of froms
     */
    public function getFroms()
    {
        return $this->froms;
    }

    /**
     * Set the value of froms
     * @return  self
     */
    public function setFroms($value)
    {
        $this->froms = $value;
        return $this;
    }

    /**
     * Get the value of is_frozen
     */
    public function getIsFrozen()
    {
        return $this->is_frozen;
    }

    /**
     * Set the value of is_frozen
     * @return  self
     */
    public function setIsFrozen($value)
    {
        $this->is_frozen = $value;
        return $this;
    }

    /**
     * Get the value of main_count
     */
    public function getMainCount()
    {
        return $this->main_count;
    }

    /**
     * Set the value of main_count
     * @return  self
     */
    public function setMainCount($value)
    {
        $this->main_count = $value;
        return $this;
    }
}
