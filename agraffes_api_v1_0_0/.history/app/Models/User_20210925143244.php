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
    
    




    /**
     * Get the value of aite_id
     */ 
    public function getAite_id()
    {
        return $this->aite_id;
    }

    /**
     * Set the value of aite_id
     *
     * @return  self
     */ 
    public function setAite_id($aite_id)
    {
        $this->aite_id = $aite_id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
        /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }
    /**
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }
    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of user_money
     */ 
    public function getUser_money()
    {
        return $this->user_money;
    }

    /**
     * Set the value of user_money
     *
     * @return  self
     */ 
    public function setUser_money($user_money)
    {
        $this->user_money = $user_money;

        return $this;
    }

    /**
     * Get the value of frozen_money
     */ 
    public function getFrozen_money()
    {
        return $this->frozen_money;
    }

    /**
     * Set the value of frozen_money
     *
     * @return  self
     */ 
    public function setFrozen_money($frozen_money)
    {
        $this->frozen_money = $frozen_money;

        return $this;
    }

    /**
     * Get the value of pay_points
     */ 
    public function getPay_points()
    {
        return $this->pay_points;
    }

    /**
     * Set the value of pay_points
     *
     * @return  self
     */ 
    public function setPay_points($pay_points)
    {
        $this->pay_points = $pay_points;

        return $this;
    }




}
