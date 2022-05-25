<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adsense extends Model
{
    use HasFactory;
    protected $table = 'adsense';
    public $timestamps = false;
    protected $fillable = array('from_ad', 'referer', 'clicks');
    protected $guarded = array();


    /**
     * Get the value of from_ad
     */
    public function getFromAd()
    {
        return $this->from_ad;
    }

    /**
     * Set the value of from_ad
     * @return  self
     */
    public function setFromAd($value)
    {
        $this->from_ad = $value;
        return $this;
    }

    /**
     * Get the value of referer
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set the value of referer
     * @return  self
     */
    public function setReferer($value)
    {
        $this->referer = $value;
        return $this;
    }

    /**
     * Get the value of clicks
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set the value of clicks
     * @return  self
     */
    public function setClicks($value)
    {
        $this->clicks = $value;
        return $this;
    }
}
