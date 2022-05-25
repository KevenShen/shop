<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdBanner extends Model
{
    use HasFactory;
    protected $table = 'ad_banner';
    protected $primaryKey = 'id';
    protected $fillable = array(
        'banner_img_url', 'banner_img_link', 'banner_img_desc', 'banner_img_order'
    );
    protected $guarded = array();


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
}
