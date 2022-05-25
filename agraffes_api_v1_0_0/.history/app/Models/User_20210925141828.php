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
        'aite_id',
        'email',
        'first_name',
        'last_name',
        'password',
        'question',
        'answer',
        'sex',
        'birthday',
        'user_money',
        'frozen_money',
        'pay_points',
        'rank_points',
        'address_id',
        'reg_time',
        'last_login',
        'last_time',
        'last_ip',
        'visit_count',
        'user_rank',
        'is_special',
        'salt',
        'flag',
        'alias',
        'msn',
        'office_phone',
        'home_phone',
        'mobile_phone',
        'is_validated',
        'passwd_question',
        'passwd_answer',
        'user_picture',
        'old_user_picture',
        'report_time'
    ];
    protected $guarded = array();


    private $aite_id;
    private $email;
    private $first_name;
    private $last_name;
    private $password;
    private $question;
    private $answer;
    private $sex;
    private $birthday;
    private $user_money;
    private $frozen_money;
    private $pay_points;
    private $rank_points;
    private $address_id;
    private $reg_time;
    private $last_login;
    private $last_time;
    private $last_ip;
    private $visit_count;
    private $user_rank;
    private $is_special;
    private $salt;
    private $flag;
    private $alias;
    private $msn;
    private $office_phone;
    private $home_phone;
    private $mobile_phone;
    private $is_validated;
    private $passwd_question;
    private $passwd_answer;
    private $user_picture;
    private $old_user_picture;
    private $report_time;
    
    

