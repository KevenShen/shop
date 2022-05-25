<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'suppliers_id';
    public $timestamps = false;
    protected $fillable = array('suppliers_name', 'suppliers_desc', 'is_check');
    protected $guarded = array();


    /**
     * Get the value of suppliers_name
     */
    public function getSuppliersName()
    {
        return $this->suppliers_name;
    }

    /**
     * Set the value of suppliers_name
     * @return  self
     */
    public function setSuppliersName($value)
    {
        $this->suppliers_name = $value;
        return $this;
    }

    /**
     * Get the value of suppliers_desc
     */
    public function getSuppliersDesc()
    {
        return $this->suppliers_desc;
    }

    /**
     * Set the value of suppliers_desc
     * @return  self
     */
    public function setSuppliersDesc($value)
    {
        $this->suppliers_desc = $value;
        return $this;
    }

    /**
     * Get the value of is_check
     */
    public function getIsCheck()
    {
        return $this->is_check;
    }

    /**
     * Set the value of is_check
     * @return  self
     */
    public function setIsCheck($value)
    {
        $this->is_check = $value;
        return $this;
    }
}
