<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $table = 'user_address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;
    protected $fillable = array('address_name', 'user_id', 'consignee', 'email', 'country', 'province', 'city', 'district', 'street', 'address', 'zipcode', 'tel', 'mobile', 'sign_building', 'best_time', 'audit', 'update_time');
    protected $guarded = array();


    /**
     * Get the value of address_name
     */
    public function getAddressName()
    {
        return $this->address_name;
    }

    /**
     * Set the value of address_name
     * @return  self
     */
    public function setAddressName($value)
    {
        $this->address_name = $value;
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
     * Get the value of sign_building
     */
    public function getSignBuilding()
    {
        return $this->sign_building;
    }

    /**
     * Set the value of sign_building
     * @return  self
     */
    public function setSignBuilding($value)
    {
        $this->sign_building = $value;
        return $this;
    }

    /**
     * Get the value of best_time
     */
    public function getBestTime()
    {
        return $this->best_time;
    }

    /**
     * Set the value of best_time
     * @return  self
     */
    public function setBestTime($value)
    {
        $this->best_time = $value;
        return $this;
    }

    /**
     * Get the value of audit
     */
    public function getAudit()
    {
        return $this->audit;
    }

    /**
     * Set the value of audit
     * @return  self
     */
    public function setAudit($value)
    {
        $this->audit = $value;
        return $this;
    }

    /**
     * Get the value of update_time
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Set the value of update_time
     * @return  self
     */
    public function setUpdateTime($value)
    {
        $this->update_time = $value;
        return $this;
    }
}
