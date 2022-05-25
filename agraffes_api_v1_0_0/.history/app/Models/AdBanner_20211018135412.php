<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdBanner extends Model
{
    use HasFactory;
    protected $table = 'ad_banner';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = array(
        'position_id',
        'media_type',
        'ad_name',
        'ad_link',
        'link_color',
        'b_title',
        's_title',
        'ad_code',
        'ad_bg_code',
        'start_time',
        'end_time',
        'link_man',
        'link_email',
        'link_phone',
        'click_count',
        'enabled',
        'is_new',
        'is_hot',
        'is_best',
        'public_ruid',
        'ad_type',
        'goods_name'
    );
    protected $guarded = array();

    /**
     * Get the value of configure_id
     */
    public function getConfigureId()
    {
        return $this->configure_id;
    }

    /**
     * Set the value of configure_id
     * @return  self
     */
    public function setConfigureId($value)
    {
        $this->configure_id = $value;
        return $this;
    }

    /**
     * Get the value of banner_img_url
     */
    public function getBannerImgUrl()
    {
        return $this->banner_img_url;
    }

    /**
     * Set the value of banner_img_url
     * @return  self
     */
    public function setBannerImgUrl($value)
    {
        $this->banner_img_url = $value;
        return $this;
    }

    /**
     * Get the value of banner_img_link
     */
    public function getBannerImgLink()
    {
        return $this->banner_img_link;
    }

    /**
     * Set the value of banner_img_link
     * @return  self
     */
    public function setBannerImgLink($value)
    {
        $this->banner_img_link = $value;
        return $this;
    }

    /**
     * Get the value of banner_img_desc
     */
    public function getBannerImgDesc()
    {
        return $this->banner_img_desc;
    }

    /**
     * Set the value of banner_img_desc
     * @return  self
     */
    public function setBannerImgDesc($value)
    {
        $this->banner_img_desc = $value;
        return $this;
    }

    /**
     * Get the value of banner_img_order
     */
    public function getBannerImgOrder()
    {
        return $this->banner_img_order;
    }

    /**
     * Set the value of banner_img_order
     * @return  self
     */
    public function setBannerImgOrder($value)
    {
        $this->banner_img_order = $value;
        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     * @return  self
     */
    public function setCreatedAt($value)
    {
        $this->created_at = $value;
        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     * @return  self
     */
    public function setUpdatedAt($value)
    {
        $this->updated_at = $value;
        return $this;
    }
}
