<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolumePrice extends Model
{
    use HasFactory;
    protected $table = 'volume_price';
    public $timestamps = false;
    protected $fillable = array('price_type', 'goods_id', 'volume_number', 'volume_price');
    protected $guarded = array();


    /**
     * Get the value of price_type
     */
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * Set the value of price_type
     * @return  self
     */
    public function setPriceType($value)
    {
        $this->price_type = $value;
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
     * Get the value of volume_number
     */
    public function getVolumeNumber()
    {
        return $this->volume_number;
    }

    /**
     * Set the value of volume_number
     * @return  self
     */
    public function setVolumeNumber($value)
    {
        $this->volume_number = $value;
        return $this;
    }

    /**
     * Get the value of volume_price
     */
    public function getVolumePrice()
    {
        return $this->volume_price;
    }

    /**
     * Set the value of volume_price
     * @return  self
     */
    public function setVolumePrice($value)
    {
        $this->volume_price = $value;
        return $this;
    }
}
