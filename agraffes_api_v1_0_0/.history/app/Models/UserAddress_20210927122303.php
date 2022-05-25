<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $table = 'user_address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;
    protected $fillable = array('address_name', 'user_id', 'consignee', 'email', 'country', 'province', 'city', 'district', 'street', 'address', 'zipcode', 'tel', 'mobile', 'sign_building', 'best_time', 'audit', 'update_time');
    protected $guarded = array();
}
