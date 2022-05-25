<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountLog extends Model
{
    use HasFactory;
    protected $table = 'account_log';
    protected $primaryKey = 'log_id';
    public $timestamps = false;
    protected $fillable = array('user_id', 'user_money', 'deposit_fee', 'frozen_money', 'rank_points', 'pay_points', 'change_time', 'change_desc', 'change_type');
    protected $guarded = array();
    
}
