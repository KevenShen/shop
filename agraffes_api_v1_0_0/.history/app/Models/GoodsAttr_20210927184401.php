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
    protected $fillable = array('goods_id', 'attr_id', 'attr_value', 'attr_price', 'attr_model', 'attr_sort', 'attr_img_flie', 'attr_gallery_flie', 'attr_img_site', 'lang_flag', 'attr_img', 'attr_thumb', 'img_flag', 'attr_pid');
    protected $guarded = array();


    /**
     * Get the value of goods_attr_id
     */
    public function getGoodsAttrId()
    {
        return $this->goods_attr_id;
    }

    /**
     * Set the value of goods_attr_id
     * @return  self
     */
    public function setGoodsAttrId($value)
    {
        $this->goods_attr_id = $value;
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
     * Get the value of attr_id
     */
    public function getAttrId()
    {
        return $this->attr_id;
    }

    /**
     * Set the value of attr_id
     * @return  self
     */
    public function setAttrId($value)
    {
        $this->attr_id = $value;
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
     * Get the value of attr_model
     */
    public function getAttrModel()
    {
        return $this->attr_model;
    }

    /**
     * Set the value of attr_model
     * @return  self
     */
    public function setAttrModel($value)
    {
        $this->attr_model = $value;
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
     * Get the value of attr_img_flie
     */
    public function getAttrImgFlie()
    {
        return $this->attr_img_flie;
    }

    /**
     * Set the value of attr_img_flie
     * @return  self
     */
    public function setAttrImgFlie($value)
    {
        $this->attr_img_flie = $value;
        return $this;
    }

    /**
     * Get the value of attr_gallery_flie
     */
    public function getAttrGalleryFlie()
    {
        return $this->attr_gallery_flie;
    }

    /**
     * Set the value of attr_gallery_flie
     * @return  self
     */
    public function setAttrGalleryFlie($value)
    {
        $this->attr_gallery_flie = $value;
        return $this;
    }

    /**
     * Get the value of attr_img_site
     */
    public function getAttrImgSite()
    {
        return $this->attr_img_site;
    }

    /**
     * Set the value of attr_img_site
     * @return  self
     */
    public function setAttrImgSite($value)
    {
        $this->attr_img_site = $value;
        return $this;
    }

    /**
     * Get the value of lang_flag
     */
    public function getLangFlag()
    {
        return $this->lang_flag;
    }

    /**
     * Set the value of lang_flag
     * @return  self
     */
    public function setLangFlag($value)
    {
        $this->lang_flag = $value;
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

    /**
     * Get the value of attr_thumb
     */
    public function getAttrThumb()
    {
        return $this->attr_thumb;
    }

    /**
     * Set the value of attr_thumb
     * @return  self
     */
    public function setAttrThumb($value)
    {
        $this->attr_thumb = $value;
        return $this;
    }

    /**
     * Get the value of img_flag
     */
    public function getImgFlag()
    {
        return $this->img_flag;
    }

    /**
     * Set the value of img_flag
     * @return  self
     */
    public function setImgFlag($value)
    {
        $this->img_flag = $value;
        return $this;
    }

    /**
     * Get the value of attr_pid
     */
    public function getAttrPid()
    {
        return $this->attr_pid;
    }

    /**
     * Set the value of attr_pid
     * @return  self
     */
    public function setAttrPid($value)
    {
        $this->attr_pid = $value;
        return $this;
    }
}
