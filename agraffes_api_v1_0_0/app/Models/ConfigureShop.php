<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigureShop extends Model
{
    use HasFactory;
    protected $table = 'configure_shop';
    public $timestamps = false;
    protected $fillable = array('parent_id', 'code', 'type', 'store_range', 'store_dir', 'value', 'sort_order');
    protected $guarded = array();

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
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     * @return  self
     */
    public function setCode($value)
    {
        $this->code = $value;
        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     * @return  self
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }

    /**
     * Get the value of store_range
     */
    public function getStoreRange()
    {
        return $this->store_range;
    }

    /**
     * Set the value of store_range
     * @return  self
     */
    public function setStoreRange($value)
    {
        $this->store_range = $value;
        return $this;
    }

    /**
     * Get the value of store_dir
     */
    public function getStoreDir()
    {
        return $this->store_dir;
    }

    /**
     * Set the value of store_dir
     * @return  self
     */
    public function setStoreDir($value)
    {
        $this->store_dir = $value;
        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;
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
}
