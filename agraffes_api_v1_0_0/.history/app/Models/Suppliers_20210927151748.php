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
}
