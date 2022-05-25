<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Goods;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'cat_id';
    public $timestamps = false;
    protected $fillable = array('parent_id', 'cat_link', 'cat_name', 'cat_icon', 'pinyin_keyword', 'keywords', 'cat_desc', 'sort_order', 'show_in_nav', 'is_show', 'is_top_show', 'click_count');
    protected $guarded = array();


    public function goods()
    {
        return $this->hasMany(Goods::class, 'cat_id', 'cat_id');
    }

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
     * Get the value of cat_name
     */
    public function getCatName()
    {
        return $this->cat_name;
    }

    /**
     * Set the value of cat_name
     * @return  self
     */
    public function setCatName($value)
    {
        $this->cat_name = $value;
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
     * Get the value of cat_desc
     */
    public function getCatDesc()
    {
        return $this->cat_desc;
    }

    /**
     * Set the value of cat_desc
     * @return  self
     */
    public function setCatDesc($value)
    {
        $this->cat_desc = $value;
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
     * Get the value of show_in_nav
     */
    public function getShowInNav()
    {
        return $this->show_in_nav;
    }

    /**
     * Set the value of show_in_nav
     * @return  self
     */
    public function setShowInNav($value)
    {
        $this->show_in_nav = $value;
        return $this;
    }

    /**
     * Get the value of style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set the value of style
     * @return  self
     */
    public function setStyle($value)
    {
        $this->style = $value;
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
     * Get the value of cat_icon
     */
    public function getCatIcon()
    {
        return $this->cat_icon;
    }

    /**
     * Set the value of cat_icon
     * @return  self
     */
    public function setCatIcon($value)
    {
        $this->cat_icon = $value;
        return $this;
    }

    /**
     * Get the value of category_links
     */
    public function getCategoryLinks()
    {
        return $this->category_links;
    }

    /**
     * Set the value of category_links
     * @return  self
     */
    public function setCategoryLinks($value)
    {
        $this->category_links = $value;
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
     * Get the value of cat_alias_name
     */
    public function getCatAliasName()
    {
        return $this->cat_alias_name;
    }

    /**
     * Set the value of cat_alias_name
     * @return  self
     */
    public function setCatAliasName($value)
    {
        $this->cat_alias_name = $value;
        return $this;
    }
}
