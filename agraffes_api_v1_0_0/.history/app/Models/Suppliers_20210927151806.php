<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'suppliers_id';
    public $timestamps = false;
    protected $fillable = array('suppliers_name', 'suppliers_desc', 'is_check');
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
     * Get the value of template_file
     */
    public function getTemplateFile()
    {
        return $this->template_file;
    }

    /**
     * Set the value of template_file
     * @return  self
     */
    public function setTemplateFile($value)
    {
        $this->template_file = $value;
        return $this;
    }

    /**
     * Get the value of measure_unit
     */
    public function getMeasureUnit()
    {
        return $this->measure_unit;
    }

    /**
     * Set the value of measure_unit
     * @return  self
     */
    public function setMeasureUnit($value)
    {
        $this->measure_unit = $value;
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
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     * @return  self
     */
    public function setGrade($value)
    {
        $this->grade = $value;
        return $this;
    }

    /**
     * Get the value of filter_attr
     */
    public function getFilterAttr()
    {
        return $this->filter_attr;
    }

    /**
     * Set the value of filter_attr
     * @return  self
     */
    public function setFilterAttr($value)
    {
        $this->filter_attr = $value;
        return $this;
    }

    /**
     * Get the value of is_top_style
     */
    public function getIsTopStyle()
    {
        return $this->is_top_style;
    }

    /**
     * Set the value of is_top_style
     * @return  self
     */
    public function setIsTopStyle($value)
    {
        $this->is_top_style = $value;
        return $this;
    }

    /**
     * Get the value of top_style_tpl
     */
    public function getTopStyleTpl()
    {
        return $this->top_style_tpl;
    }

    /**
     * Set the value of top_style_tpl
     * @return  self
     */
    public function setTopStyleTpl($value)
    {
        $this->top_style_tpl = $value;
        return $this;
    }

    /**
     * Get the value of style_icon
     */
    public function getStyleIcon()
    {
        return $this->style_icon;
    }

    /**
     * Set the value of style_icon
     * @return  self
     */
    public function setStyleIcon($value)
    {
        $this->style_icon = $value;
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
     * Get the value of is_top_show
     */
    public function getIsTopShow()
    {
        return $this->is_top_show;
    }

    /**
     * Set the value of is_top_show
     * @return  self
     */
    public function setIsTopShow($value)
    {
        $this->is_top_show = $value;
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
     * Get the value of category_topic
     */
    public function getCategoryTopic()
    {
        return $this->category_topic;
    }

    /**
     * Set the value of category_topic
     * @return  self
     */
    public function setCategoryTopic($value)
    {
        $this->category_topic = $value;
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

    /**
     * Get the value of commission_rate
     */
    public function getCommissionRate()
    {
        return $this->commission_rate;
    }

    /**
     * Set the value of commission_rate
     * @return  self
     */
    public function setCommissionRate($value)
    {
        $this->commission_rate = $value;
        return $this;
    }

    /**
     * Get the value of touch_icon
     */
    public function getTouchIcon()
    {
        return $this->touch_icon;
    }

    /**
     * Set the value of touch_icon
     * @return  self
     */
    public function setTouchIcon($value)
    {
        $this->touch_icon = $value;
        return $this;
    }

    /**
     * Get the value of cate_title
     */
    public function getCateTitle()
    {
        return $this->cate_title;
    }

    /**
     * Set the value of cate_title
     * @return  self
     */
    public function setCateTitle($value)
    {
        $this->cate_title = $value;
        return $this;
    }

    /**
     * Get the value of cate_keywords
     */
    public function getCateKeywords()
    {
        return $this->cate_keywords;
    }

    /**
     * Set the value of cate_keywords
     * @return  self
     */
    public function setCateKeywords($value)
    {
        $this->cate_keywords = $value;
        return $this;
    }

    /**
     * Get the value of cate_description
     */
    public function getCateDescription()
    {
        return $this->cate_description;
    }

    /**
     * Set the value of cate_description
     * @return  self
     */
    public function setCateDescription($value)
    {
        $this->cate_description = $value;
        return $this;
    }

    /**
     * Get the value of suppliers_name
     */
    public function getSuppliersName()
    {
        return $this->suppliers_name;
    }

    /**
     * Set the value of suppliers_name
     * @return  self
     */
    public function setSuppliersName($value)
    {
        $this->suppliers_name = $value;
        return $this;
    }

    /**
     * Get the value of suppliers_desc
     */
    public function getSuppliersDesc()
    {
        return $this->suppliers_desc;
    }

    /**
     * Set the value of suppliers_desc
     * @return  self
     */
    public function setSuppliersDesc($value)
    {
        $this->suppliers_desc = $value;
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
}
