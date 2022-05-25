<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = [
        'aite_id', 'email',
        'user_name', 'nick_name', 'password', 'question', 'answer', 'sex', 'birthday', 'user_money', 'frozen_money', 'pay_points', 'rank_points', 'address_id', 'reg_time', 'last_login', 'last_time', 'last_ip', 'visit_count', 'user_rank', 'is_special', 'ec_salt', 'salt', 'drp_parent_id', 'parent_id', 'flag', 'alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'is_validated', 'credit_line', 'passwd_question', 'passwd_answer', 'user_picture', 'old_user_picture', 'report_time'
    ];
    protected $guarded = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
