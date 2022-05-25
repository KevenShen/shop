<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdMedia extends Model
{
    use HasFactory;
    protected $table = 'ad_media';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = array(
        'configure_id', 'media_video_url', 'media_video_link', 'media_video_desc', 'media_video_order', 'created_at', 'updated_at'
    );
    protected $guarded = array();


    /**
     * Get the value of configure_id
     */
    public function getConfigureId()
    {
        return $this->configure_id;
    }

    /**
     * Set the value of configure_id
     * @return  self
     */
    public function setConfigureId($value)
    {
        $this->configure_id = $value;
        return $this;
    }

    /**
     * Get the value of media_video_url
     */
    public function getMediaVideoUrl()
    {
        return $this->media_video_url;
    }

    /**
     * Set the value of media_video_url
     * @return  self
     */
    public function setMediaVideoUrl($value)
    {
        $this->media_video_url = $value;
        return $this;
    }

    /**
     * Get the value of media_video_link
     */
    public function getMediaVideoLink()
    {
        return $this->media_video_link;
    }

    /**
     * Set the value of media_video_link
     * @return  self
     */
    public function setMediaVideoLink($value)
    {
        $this->media_video_link = $value;
        return $this;
    }

    /**
     * Get the value of media_video_desc
     */
    public function getMediaVideoDesc()
    {
        return $this->media_video_desc;
    }

    /**
     * Set the value of media_video_desc
     * @return  self
     */
    public function setMediaVideoDesc($value)
    {
        $this->media_video_desc = $value;
        return $this;
    }

    /**
     * Get the value of media_video_order
     */
    public function getMediaVideoOrder()
    {
        return $this->media_video_order;
    }

    /**
     * Set the value of media_video_order
     * @return  self
     */
    public function setMediaVideoOrder($value)
    {
        $this->media_video_order = $value;
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
