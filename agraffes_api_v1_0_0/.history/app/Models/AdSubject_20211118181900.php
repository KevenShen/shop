<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdSubject extends Model
{
    use HasFactory;
    protected $table = 'ad_subject';
    protected $primaryKey = 'ad_subject_id';
    protected $fillable = array(
        'ad_subject_title', 'ad_subject_subtitle', 'ad_subject_link', 'ad_subject_link_desc', 'ad_subject_order', 'created_at', 'updated_at'
    );
    protected $guarded = array();

    /**
     * Get the value of ad_subject_title
     */
    public function getAdSubjectTitle()
    {
        return $this->ad_subject_title;
    }

    /**
     * Set the value of ad_subject_title
     * @return  self
     */
    public function setAdSubjectTitle($value)
    {
        $this->ad_subject_title = $value;
        return $this;
    }

    /**
     * Get the value of ad_subject_subtitle
     */
    public function getAdSubjectSubtitle()
    {
        return $this->ad_subject_subtitle;
    }

    /**
     * Set the value of ad_subject_subtitle
     * @return  self
     */
    public function setAdSubjectSubtitle($value)
    {
        $this->ad_subject_subtitle = $value;
        return $this;
    }

    /**
     * Get the value of ad_subject_link
     */
    public function getAdSubjectLink()
    {
        return $this->ad_subject_link;
    }

    /**
     * Set the value of ad_subject_link
     * @return  self
     */
    public function setAdSubjectLink($value)
    {
        $this->ad_subject_link = $value;
        return $this;
    }

    /**
     * Get the value of ad_subject_link_desc
     */
    public function getAdSubjectLinkDesc()
    {
        return $this->ad_subject_link_desc;
    }

    /**
     * Set the value of ad_subject_link_desc
     * @return  self
     */
    public function setAdSubjectLinkDesc($value)
    {
        $this->ad_subject_link_desc = $value;
        return $this;
    }

    /**
     * Get the value of ad_subject_order
     */
    public function getAdSubjectOrder()
    {
        return $this->ad_subject_order;
    }

    /**
     * Set the value of ad_subject_order
     * @return  self
     */
    public function setAdSubjectOrder($value)
    {
        $this->ad_subject_order = $value;
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
