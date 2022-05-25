<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $primaryKey = 'id';
    protected $fillable = array('goods_sn', 'goods_name', 'handle', 'goods_desc', 'shop_price', 'market_price', 'show_in_index', 'is_hot', 'is_new', 'cost_price', 'goods_number', 'goods_desc_edior', 'goods_video', 'sales_volume', 'web_title', 'web_keywords', 'web_description', 'goods_brief', 'goods_thumb', 'goods_img', 'original_img', 'extension_code', 'is_promote', 'is_check', 'click_count', 'is_goods_real_gallery_num', 'group_number', 'goods_shipai', 'model_price', 'model_inventory', 'model_attr', 'largest_amount', 'pinyin_keyword', 'tid', 'is_real', 'sales_volume_base', 'product_table', 'product_id', 'product_price', 'is_show', 'is_on_sale', 'sort_order', 'created_at', 'updated_at', 'goods_real_img');
    protected $guarded = array();

    /**
     * Get the value of cat_id
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Set the value of cat_id
     * @return  self
     */
    public function setCatId($value)
    {
        $this->cat_id = $value;
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
     * Get the value of cost_price
     */
    public function getCostPrice()
    {
        return $this->cost_price;
    }

    /**
     * Set the value of cost_price
     * @return  self
     */
    public function setCostPrice($value)
    {
        $this->cost_price = $value;
        return $this;
    }

    /**
     * Get the value of shop_price
     */
    public function getShopPrice()
    {
        return $this->shop_price;
    }

    /**
     * Set the value of shop_price
     * @return  self
     */
    public function setShopPrice($value)
    {
        $this->shop_price = $value;
        return $this;
    }

    /**
     * Get the value of keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set the value of keywords
     * @return  self
     */
    public function setKeywords($value)
    {
        $this->keywords = $value;
        return $this;
    }

    /**
     * Get the value of goods_brief
     */
    public function getGoodsBrief()
    {
        return $this->goods_brief;
    }

    /**
     * Set the value of goods_brief
     * @return  self
     */
    public function setGoodsBrief($value)
    {
        $this->goods_brief = $value;
        return $this;
    }

    /**
     * Get the value of goods_desc
     */
    public function getGoodsDesc()
    {
        return $this->goods_desc;
    }

    /**
     * Set the value of goods_desc
     * @return  self
     */
    public function setGoodsDesc($value)
    {
        $this->goods_desc = $value;
        return $this;
    }

    /**
     * Get the value of goods_thumb
     */
    public function getGoodsThumb()
    {
        return $this->goods_thumb;
    }

    /**
     * Set the value of goods_thumb
     * @return  self
     */
    public function setGoodsThumb($value)
    {
        $this->goods_thumb = $value;
        return $this;
    }

    /**
     * Get the value of goods_img
     */
    public function getGoodsImg()
    {
        return $this->goods_img;
    }

    /**
     * Set the value of goods_img
     * @return  self
     */
    public function setGoodsImg($value)
    {
        $this->goods_img = $value;
        return $this;
    }

    /**
     * Get the value of original_img
     */
    public function getOriginalImg()
    {
        return $this->original_img;
    }

    /**
     * Set the value of original_img
     * @return  self
     */
    public function setOriginalImg($value)
    {
        $this->original_img = $value;
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
     * Get the value of is_promote
     */
    public function getIsPromote()
    {
        return $this->is_promote;
    }

    /**
     * Set the value of is_promote
     * @return  self
     */
    public function setIsPromote($value)
    {
        $this->is_promote = $value;
        return $this;
    }

    /**
     * Get the value of is_check
     */
    public function getIsCheck()
    {
        return $this->is_check;
    }

    /**
     * Set the value of is_check
     * @return  self
     */
    public function setIsCheck($value)
    {
        $this->is_check = $value;
        return $this;
    }

    /**
     * Get the value of group_number
     */
    public function getGroupNumber()
    {
        return $this->group_number;
    }

    /**
     * Set the value of group_number
     * @return  self
     */
    public function setGroupNumber($value)
    {
        $this->group_number = $value;
        return $this;
    }

    /**
     * Get the value of goods_shipai
     */
    public function getGoodsShipai()
    {
        return $this->goods_shipai;
    }

    /**
     * Set the value of goods_shipai
     * @return  self
     */
    public function setGoodsShipai($value)
    {
        $this->goods_shipai = $value;
        return $this;
    }

    /**
     * Get the value of sales_volume
     */
    public function getSalesVolume()
    {
        return $this->sales_volume;
    }

    /**
     * Set the value of sales_volume
     * @return  self
     */
    public function setSalesVolume($value)
    {
        $this->sales_volume = $value;
        return $this;
    }

    /**
     * Get the value of model_price
     */
    public function getModelPrice()
    {
        return $this->model_price;
    }

    /**
     * Set the value of model_price
     * @return  self
     */
    public function setModelPrice($value)
    {
        $this->model_price = $value;
        return $this;
    }

    /**
     * Get the value of model_inventory
     */
    public function getModelInventory()
    {
        return $this->model_inventory;
    }

    /**
     * Set the value of model_inventory
     * @return  self
     */
    public function setModelInventory($value)
    {
        $this->model_inventory = $value;
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
     * Get the value of largest_amount
     */
    public function getLargestAmount()
    {
        return $this->largest_amount;
    }

    /**
     * Set the value of largest_amount
     * @return  self
     */
    public function setLargestAmount($value)
    {
        $this->largest_amount = $value;
        return $this;
    }

    /**
     * Get the value of pinyin_keyword
     */
    public function getPinyinKeyword()
    {
        return $this->pinyin_keyword;
    }

    /**
     * Set the value of pinyin_keyword
     * @return  self
     */
    public function setPinyinKeyword($value)
    {
        $this->pinyin_keyword = $value;
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
     * Get the value of goods_video
     */
    public function getGoodsVideo()
    {
        return $this->goods_video;
    }

    /**
     * Set the value of goods_video
     * @return  self
     */
    public function setGoodsVideo($value)
    {
        $this->goods_video = $value;
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
     * Get the value of sales_volume_base
     */
    public function getSalesVolumeBase()
    {
        return $this->sales_volume_base;
    }

    /**
     * Set the value of sales_volume_base
     * @return  self
     */
    public function setSalesVolumeBase($value)
    {
        $this->sales_volume_base = $value;
        return $this;
    }

    /**
     * Get the value of product_table
     */
    public function getProductTable()
    {
        return $this->product_table;
    }

    /**
     * Set the value of product_table
     * @return  self
     */
    public function setProductTable($value)
    {
        $this->product_table = $value;
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
     * Get the value of is_show
     */
    public function getIsShow()
    {
        return $this->is_show;
    }

    /**
     * Set the value of is_show
     * @return  self
     */
    public function setIsShow($value)
    {
        $this->is_show = $value;
        return $this;
    }

    /**
     * Get the value of is_on_sale
     */
    public function getIsOnSale()
    {
        return $this->is_on_sale;
    }

    /**
     * Set the value of is_on_sale
     * @return  self
     */
    public function setIsOnSale($value)
    {
        $this->is_on_sale = $value;
        return $this;
    }

    /**
     * Get the value of sort_order
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Set the value of sort_order
     * @return  self
     */
    public function setSortOrder($value)
    {
        $this->sort_order = $value;
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
