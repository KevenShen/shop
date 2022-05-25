<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configure extends Model
{
    use HasFactory;
    protected $table = 'configure';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = array('union_id', 'shop_name', 'shop_title', 'shop_keywords', 'shop_desc', 'shop_country', 'shop_province', 'shop_city', 'shop_address', 'service_email', 'service_phone', 'shop_closed', 'close_comment', 'shop_logo', 'no_picture', 'admin_logo', 'copyright');
    protected $guarded = array();


    /**
     * Get the value of union_id
     */
    public function getUnionId()
    {
        return $this->union_id;
    }

    /**
     * Set the value of union_id
     * @return  self
     */
    public function setUnionId($value)
    {
        $this->union_id = $value;
        return $this;
    }

    /**
     * Get the value of shop_name
     */
    public function getShopName()
    {
        return $this->shop_name;
    }

    /**
     * Set the value of shop_name
     * @return  self
     */
    public function setShopName($value)
    {
        $this->shop_name = $value;
        return $this;
    }

    /**
     * Get the value of shop_title
     */
    public function getShopTitle()
    {
        return $this->shop_title;
    }

    /**
     * Set the value of shop_title
     * @return  self
     */
    public function setShopTitle($value)
    {
        $this->shop_title = $value;
        return $this;
    }

    /**
     * Get the value of shop_keywords
     */
    public function getShopKeywords()
    {
        return $this->shop_keywords;
    }

    /**
     * Set the value of shop_keywords
     * @return  self
     */
    public function setShopKeywords($value)
    {
        $this->shop_keywords = $value;
        return $this;
    }

    /**
     * Get the value of shop_desc
     */
    public function getShopDesc()
    {
        return $this->shop_desc;
    }

    /**
     * Set the value of shop_desc
     * @return  self
     */
    public function setShopDesc($value)
    {
        $this->shop_desc = $value;
        return $this;
    }

    /**
     * Get the value of shop_country
     */
    public function getShopCountry()
    {
        return $this->shop_country;
    }

    /**
     * Set the value of shop_country
     * @return  self
     */
    public function setShopCountry($value)
    {
        $this->shop_country = $value;
        return $this;
    }

    /**
     * Get the value of shop_province
     */
    public function getShopProvince()
    {
        return $this->shop_province;
    }

    /**
     * Set the value of shop_province
     * @return  self
     */
    public function setShopProvince($value)
    {
        $this->shop_province = $value;
        return $this;
    }

    /**
     * Get the value of shop_city
     */
    public function getShopCity()
    {
        return $this->shop_city;
    }

    /**
     * Set the value of shop_city
     * @return  self
     */
    public function setShopCity($value)
    {
        $this->shop_city = $value;
        return $this;
    }

    /**
     * Get the value of shop_address
     */
    public function getShopAddress()
    {
        return $this->shop_address;
    }

    /**
     * Set the value of shop_address
     * @return  self
     */
    public function setShopAddress($value)
    {
        $this->shop_address = $value;
        return $this;
    }

    /**
     * Get the value of service_email
     */
    public function getServiceEmail()
    {
        return $this->service_email;
    }

    /**
     * Set the value of service_email
     * @return  self
     */
    public function setServiceEmail($value)
    {
        $this->service_email = $value;
        return $this;
    }

    /**
     * Get the value of service_phone
     */
    public function getServicePhone()
    {
        return $this->service_phone;
    }

    /**
     * Set the value of service_phone
     * @return  self
     */
    public function setServicePhone($value)
    {
        $this->service_phone = $value;
        return $this;
    }

    /**
     * Get the value of shop_closed
     */
    public function getShopClosed()
    {
        return $this->shop_closed;
    }

    /**
     * Set the value of shop_closed
     * @return  self
     */
    public function setShopClosed($value)
    {
        $this->shop_closed = $value;
        return $this;
    }

    /**
     * Get the value of close_comment
     */
    public function getCloseComment()
    {
        return $this->close_comment;
    }

    /**
     * Set the value of close_comment
     * @return  self
     */
    public function setCloseComment($value)
    {
        $this->close_comment = $value;
        return $this;
    }

    /**
     * Get the value of shop_logo
     */
    public function getShopLogo()
    {
        return $this->shop_logo;
    }

    /**
     * Set the value of shop_logo
     * @return  self
     */
    public function setShopLogo($value)
    {
        $this->shop_logo = $value;
        return $this;
    }

    /**
     * Get the value of no_picture
     */
    public function getNoPicture()
    {
        return $this->no_picture;
    }

    /**
     * Set the value of no_picture
     * @return  self
     */
    public function setNoPicture($value)
    {
        $this->no_picture = $value;
        return $this;
    }

    /**
     * Get the value of admin_logo
     */
    public function getAdminLogo()
    {
        return $this->admin_logo;
    }

    /**
     * Set the value of admin_logo
     * @return  self
     */
    public function setAdminLogo($value)
    {
        $this->admin_logo = $value;
        return $this;
    }

    /**
     * Get the value of copyright
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set the value of copyright
     * @return  self
     */
    public function setCopyright($value)
    {
        $this->copyright = $value;
        return $this;
    }
}
