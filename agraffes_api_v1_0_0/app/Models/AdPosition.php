<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdPosition extends Model
{
    use HasFactory;
    protected $table = 'ad_position';
    protected $primaryKey = 'position_id';
    public $timestamps = false;
    protected $fillable = array('user_id', 'position_name', 'ad_width', 'ad_height', 'position_model', 'position_desc', 'position_style', 'is_public', 'theme');
    protected $guarded = array();


    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     * @return  self
     */
    public function setUserId($value)
    {
        $this->user_id = $value;
        return $this;
    }

    /**
     * Get the value of position_name
     */
    public function getPositionName()
    {
        return $this->position_name;
    }

    /**
     * Set the value of position_name
     * @return  self
     */
    public function setPositionName($value)
    {
        $this->position_name = $value;
        return $this;
    }

    /**
     * Get the value of ad_width
     */
    public function getAdWidth()
    {
        return $this->ad_width;
    }

    /**
     * Set the value of ad_width
     * @return  self
     */
    public function setAdWidth($value)
    {
        $this->ad_width = $value;
        return $this;
    }

    /**
     * Get the value of ad_height
     */
    public function getAdHeight()
    {
        return $this->ad_height;
    }

    /**
     * Set the value of ad_height
     * @return  self
     */
    public function setAdHeight($value)
    {
        $this->ad_height = $value;
        return $this;
    }

    /**
     * Get the value of position_model
     */
    public function getPositionModel()
    {
        return $this->position_model;
    }

    /**
     * Set the value of position_model
     * @return  self
     */
    public function setPositionModel($value)
    {
        $this->position_model = $value;
        return $this;
    }

    /**
     * Get the value of position_desc
     */
    public function getPositionDesc()
    {
        return $this->position_desc;
    }

    /**
     * Set the value of position_desc
     * @return  self
     */
    public function setPositionDesc($value)
    {
        $this->position_desc = $value;
        return $this;
    }

    /**
     * Get the value of position_style
     */
    public function getPositionStyle()
    {
        return $this->position_style;
    }

    /**
     * Set the value of position_style
     * @return  self
     */
    public function setPositionStyle($value)
    {
        $this->position_style = $value;
        return $this;
    }

    /**
     * Get the value of is_public
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Set the value of is_public
     * @return  self
     */
    public function setIsPublic($value)
    {
        $this->is_public = $value;
        return $this;
    }

    /**
     * Get the value of theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     * @return  self
     */
    public function setTheme($value)
    {
        $this->theme = $value;
        return $this;
    }
}
