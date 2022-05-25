<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $table = 'ad';
    protected $primaryKey = 'ad_id';
    public $timestamps = false;
    protected $fillable = array('position_id', 'media_type', 'ad_name', 'ad_link', 'link_color', 'b_title', 's_title', 'ad_code', 'ad_bg_code', 'start_time', 'end_time', 'link_man', 'link_email', 'link_phone', 'click_count', 'enabled', 'is_new', 'is_hot', 'is_best', 'public_ruid', 'ad_type', 'goods_name');
    protected $guarded = array();


    /**
     * Get the value of position_id
     */
    public function getPositionId()
    {
        return $this->position_id;
    }

    /**
     * Set the value of position_id
     * @return  self
     */
    public function setPositionId($value)
    {
        $this->position_id = $value;
        return $this;
    }

    /**
     * Get the value of media_type
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Set the value of media_type
     * @return  self
     */
    public function setMediaType($value)
    {
        $this->media_type = $value;
        return $this;
    }

    /**
     * Get the value of ad_name
     */
    public function getAdName()
    {
        return $this->ad_name;
    }

    /**
     * Set the value of ad_name
     * @return  self
     */
    public function setAdName($value)
    {
        $this->ad_name = $value;
        return $this;
    }

    /**
     * Get the value of ad_link
     */
    public function getAdLink()
    {
        return $this->ad_link;
    }

    /**
     * Set the value of ad_link
     * @return  self
     */
    public function setAdLink($value)
    {
        $this->ad_link = $value;
        return $this;
    }

    /**
     * Get the value of link_color
     */
    public function getLinkColor()
    {
        return $this->link_color;
    }

    /**
     * Set the value of link_color
     * @return  self
     */
    public function setLinkColor($value)
    {
        $this->link_color = $value;
        return $this;
    }

    /**
     * Get the value of b_title
     */
    public function getBTitle()
    {
        return $this->b_title;
    }

    /**
     * Set the value of b_title
     * @return  self
     */
    public function setBTitle($value)
    {
        $this->b_title = $value;
        return $this;
    }

    /**
     * Get the value of s_title
     */
    public function getSTitle()
    {
        return $this->s_title;
    }

    /**
     * Set the value of s_title
     * @return  self
     */
    public function setSTitle($value)
    {
        $this->s_title = $value;
        return $this;
    }

    /**
     * Get the value of ad_code
     */
    public function getAdCode()
    {
        return $this->ad_code;
    }

    /**
     * Set the value of ad_code
     * @return  self
     */
    public function setAdCode($value)
    {
        $this->ad_code = $value;
        return $this;
    }

    /**
     * Get the value of ad_bg_code
     */
    public function getAdBgCode()
    {
        return $this->ad_bg_code;
    }

    /**
     * Set the value of ad_bg_code
     * @return  self
     */
    public function setAdBgCode($value)
    {
        $this->ad_bg_code = $value;
        return $this;
    }

    /**
     * Get the value of start_time
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set the value of start_time
     * @return  self
     */
    public function setStartTime($value)
    {
        $this->start_time = $value;
        return $this;
    }

    /**
     * Get the value of end_time
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Set the value of end_time
     * @return  self
     */
    public function setEndTime($value)
    {
        $this->end_time = $value;
        return $this;
    }

    /**
     * Get the value of link_man
     */
    public function getLinkMan()
    {
        return $this->link_man;
    }

    /**
     * Set the value of link_man
     * @return  self
     */
    public function setLinkMan($value)
    {
        $this->link_man = $value;
        return $this;
    }

    /**
     * Get the value of link_email
     */
    public function getLinkEmail()
    {
        return $this->link_email;
    }

    /**
     * Set the value of link_email
     * @return  self
     */
    public function setLinkEmail($value)
    {
        $this->link_email = $value;
        return $this;
    }

    /**
     * Get the value of link_phone
     */
    public function getLinkPhone()
    {
        return $this->link_phone;
    }

    /**
     * Set the value of link_phone
     * @return  self
     */
    public function setLinkPhone($value)
    {
        $this->link_phone = $value;
        return $this;
    }

    /**
     * Get the value of click_count
     */
    public function getClickCount()
    {
        return $this->click_count;
    }

    /**
     * Set the value of click_count
     * @return  self
     */
    public function setClickCount($value)
    {
        $this->click_count = $value;
        return $this;
    }

    /**
     * Get the value of enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     * @return  self
     */
    public function setEnabled($value)
    {
        $this->enabled = $value;
        return $this;
    }

    /**
     * Get the value of is_new
     */
    public function getIsNew()
    {
        return $this->is_new;
    }

    /**
     * Set the value of is_new
     * @return  self
     */
    public function setIsNew($value)
    {
        $this->is_new = $value;
        return $this;
    }

    /**
     * Get the value of is_hot
     */
    public function getIsHot()
    {
        return $this->is_hot;
    }

    /**
     * Set the value of is_hot
     * @return  self
     */
    public function setIsHot($value)
    {
        $this->is_hot = $value;
        return $this;
    }

    /**
     * Get the value of is_best
     */
    public function getIsBest()
    {
        return $this->is_best;
    }

    /**
     * Set the value of is_best
     * @return  self
     */
    public function setIsBest($value)
    {
        $this->is_best = $value;
        return $this;
    }

    /**
     * Get the value of public_ruid
     */
    public function getPublicRuid()
    {
        return $this->public_ruid;
    }

    /**
     * Set the value of public_ruid
     * @return  self
     */
    public function setPublicRuid($value)
    {
        $this->public_ruid = $value;
        return $this;
    }

    /**
     * Get the value of ad_type
     */
    public function getAdType()
    {
        return $this->ad_type;
    }

    /**
     * Set the value of ad_type
     * @return  self
     */
    public function setAdType($value)
    {
        $this->ad_type = $value;
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
}
