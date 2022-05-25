<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdCustom extends Model
{
    use HasFactory;
    protected $table = 'ad_custom';
    protected $primaryKey = 'ad_id';
    public $timestamps = false;
    protected $fillable = array('ad_type', 'ad_name', 'add_time', 'content', 'url', 'ad_status');
    protected $guarded = array();


    /**
     * Get the value of ad_type
     */
    public function getAdType()
    {
        return $this->ad_type;
    }

    /**
     * Set the value of ad_type
     * @return  self
     */
    public function setAdType($value)
    {
        $this->ad_type = $value;
        return $this;
    }

    /**
     * Get the value of ad_name
     */
    public function getAdName()
    {
        return $this->ad_name;
    }

    /**
     * Set the value of ad_name
     * @return  self
     */
    public function setAdName($value)
    {
        $this->ad_name = $value;
        return $this;
    }

    /**
     * Get the value of add_time
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Set the value of add_time
     * @return  self
     */
    public function setAddTime($value)
    {
        $this->add_time = $value;
        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     * @return  self
     */
    public function setContent($value)
    {
        $this->content = $value;
        return $this;
    }

    /**
     * Get the value of url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     * @return  self
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }

    /**
     * Get the value of ad_status
     */
    public function getAdStatus()
    {
        return $this->ad_status;
    }

    /**
     * Set the value of ad_status
     * @return  self
     */
    public function setAdStatus($value)
    {
        $this->ad_status = $value;
        return $this;
    }
}
