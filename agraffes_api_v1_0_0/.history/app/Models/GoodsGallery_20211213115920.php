<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsGallery extends Model
{
    use HasFactory;
    protected $table = 'goods_gallery';
    protected $primaryKey = 'img_id';
    public $timestamps = false;
    protected $fillable = array('goods_id', 'handle', 'img_src', 'img_desc', 'img_original', 'order');
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
   * Get the value of img_src
   */
  public function getImgSrc()
  {
    return $this->img_src;
  }

  /**
   * Set the value of img_src
   * @return  self
   */
  public function setImgSrc($value)
  {
    $this->img_src = $value;
    return $this;
  }
  
  /**
   * Get the value of img_desc
   */
  public function getImgDesc()
  {
    return $this->img_desc;
  }

  /**
   * Set the value of img_desc
   * @return  self
   */
  public function setImgDesc($value)
  {
    $this->img_desc = $value;
    return $this;
  }
  
  /**
   * Get the value of img_original
   */
  public function getImgOriginal()
  {
    return $this->img_original;
  }

  /**
   * Set the value of img_original
   * @return  self
   */
  public function setImgOriginal($value)
  {
    $this->img_original = $value;
    return $this;
  }
  
  /**
   * Get the value of order
   */
  public function getOrder()
  {
    return $this->order;
  }

  /**
   * Set the value of order
   * @return  self
   */
  public function setOrder($value)
  {
    $this->order = $value;
    return $this;
  }
  
}
