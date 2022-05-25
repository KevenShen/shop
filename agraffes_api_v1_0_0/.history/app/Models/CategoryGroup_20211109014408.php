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
    protected $fillable = array('goods_id', 'cat_one', 'cat_two', 'cat_three');
    protected $guarded = array();

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
