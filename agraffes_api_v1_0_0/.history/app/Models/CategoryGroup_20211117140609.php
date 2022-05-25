<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;
    protected $table = 'category_group';
    protected $primaryKey = 'cat_group_id';
    public $timestamps = false;
    protected $fillable = array('handle', 'cat_name', 'cat_link', 'goods_id', 'cat_one', 'cat_two', 'cat_three');
    protected $guarded = array();


    /**
     * Get the value of handle
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set the value of handle
     * @return  self
     */
    public function setHandle($value)
    {
        $this->handle = $value;
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
     * Get the value of cat_link
     */
    public function getCatLink()
    {
        return $this->cat_link;
    }

    /**
     * Set the value of cat_link
     * @return  self
     */
    public function setCatLink($value)
    {
        $this->cat_link = $value;
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
     * Get the value of cat_one
     */
    public function getCatOne()
    {
        return $this->cat_one;
    }

    /**
     * Set the value of cat_one
     * @return  self
     */
    public function setCatOne($value)
    {
        $this->cat_one = $value;
        return $this;
    }

    /**
     * Get the value of cat_two
     */
    public function getCatTwo()
    {
        return $this->cat_two;
    }

    /**
     * Set the value of cat_two
     * @return  self
     */
    public function setCatTwo($value)
    {
        $this->cat_two = $value;
        return $this;
    }

    /**
     * Get the value of cat_three
     */
    public function getCatThree()
    {
        return $this->cat_three;
    }

    /**
     * Set the value of cat_three
     * @return  self
     */
    public function setCatThree($value)
    {
        $this->cat_three = $value;
        return $this;
    }
}
