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
	protected $fillable = array('aite_id', 'email', 'user_name', 'nick_name', 'password', 'question', 'answer', 'sex', 'birthday', 'user_money', 'frozen_money', 'pay_points', 'rank_points', 'address_id', 'reg_time', 'last_login', 'last_time', 'last_ip', 'visit_count', 'user_rank', 'is_special', 'ec_salt', 'salt', 'drp_parent_id', 'parent_id', 'flag', 'alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'is_validated', 'credit_line', 'passwd_question', 'passwd_answer', 'user_picture', 'old_user_picture', 'report_time');
	protected $guarded = array();



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

    /**
     * Get the value of rank_points
     */ 
    public function getRank_points()
    {
        return $this->rank_points;
    }

    /**
     * Set the value of rank_points
     *
     * @return  self
     */ 
    public function setRank_points($rank_points)
    {
        $this->rank_points = $rank_points;

        return $this;
    }

    /**
     * Get the value of address_id
     */ 
    public function getAddress_id()
    {
        return $this->address_id;
    }

    /**
     * Set the value of address_id
     *
     * @return  self
     */ 
    public function setAddress_id($address_id)
    {
        $this->address_id = $address_id;

        return $this;
    }

    /**
     * Get the value of reg_time
     */ 
    public function getReg_time()
    {
        return $this->reg_time;
    }

    /**
     * Set the value of reg_time
     *
     * @return  self
     */ 
    public function setReg_time($reg_time)
    {
        $this->reg_time = $reg_time;

        return $this;
    }

    /**
     * Get the value of last_login
     */ 
    public function getLast_login()
    {
        return $this->last_login;
    }

    /**
     * Set the value of last_login
     *
     * @return  self
     */ 
    public function setLast_login($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Get the value of last_time
     */ 
    public function getLast_time()
    {
        return $this->last_time;
    }

    /**
     * Set the value of last_time
     *
     * @return  self
     */ 
    public function setLast_time($last_time)
    {
        $this->last_time = $last_time;

        return $this;
    }

    /**
     * Get the value of last_ip
     */ 
    public function getLast_ip()
    {
        return $this->last_ip;
    }

    /**
     * Set the value of last_ip
     *
     * @return  self
     */ 
    public function setLast_ip($last_ip)
    {
        $this->last_ip = $last_ip;

        return $this;
    }

    /**
     * Get the value of visit_count
     */ 
    public function getVisit_count()
    {
        return $this->visit_count;
    }

    /**
     * Set the value of visit_count
     *
     * @return  self
     */ 
    public function setVisit_count($visit_count)
    {
        $this->visit_count = $visit_count;

        return $this;
    }

    /**
     * Get the value of user_rank
     */ 
    public function getUser_rank()
    {
        return $this->user_rank;
    }

    /**
     * Set the value of user_rank
     *
     * @return  self
     */ 
    public function setUser_rank($user_rank)
    {
        $this->user_rank = $user_rank;

        return $this;
    }

    /**
     * Get the value of is_special
     */ 
    public function getIs_special()
    {
        return $this->is_special;
    }

    /**
     * Set the value of is_special
     *
     * @return  self
     */ 
    public function setIs_special($is_special)
    {
        $this->is_special = $is_special;

        return $this;
    }

    /**
     * Get the value of salt
     */ 
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set the value of salt
     *
     * @return  self
     */ 
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get the value of flag
     */ 
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set the value of flag
     *
     * @return  self
     */ 
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get the value of alias
     */ 
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set the value of alias
     *
     * @return  self
     */ 
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get the value of msn
     */ 
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set the value of msn
     *
     * @return  self
     */ 
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get the value of office_phone
     */ 
    public function getOffice_phone()
    {
        return $this->office_phone;
    }

    /**
     * Set the value of office_phone
     *
     * @return  self
     */ 
    public function setOffice_phone($office_phone)
    {
        $this->office_phone = $office_phone;

        return $this;
    }

    /**
     * Get the value of home_phone
     */ 
    public function getHome_phone()
    {
        return $this->home_phone;
    }

    /**
     * Set the value of home_phone
     *
     * @return  self
     */ 
    public function setHome_phone($home_phone)
    {
        $this->home_phone = $home_phone;

        return $this;
    }

    /**
     * Get the value of mobile_phone
     */ 
    public function getMobile_phone()
    {
        return $this->mobile_phone;
    }

    /**
     * Set the value of mobile_phone
     *
     * @return  self
     */ 
    public function setMobile_phone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;

        return $this;
    }

    /**
     * Get the value of is_validated
     */ 
    public function getIs_validated()
    {
        return $this->is_validated;
    }

    /**
     * Set the value of is_validated
     *
     * @return  self
     */ 
    public function setIs_validated($is_validated)
    {
        $this->is_validated = $is_validated;

        return $this;
    }

    /**
     * Get the value of passwd_question
     */ 
    public function getPasswd_question()
    {
        return $this->passwd_question;
    }

    /**
     * Set the value of passwd_question
     *
     * @return  self
     */ 
    public function setPasswd_question($passwd_question)
    {
        $this->passwd_question = $passwd_question;

        return $this;
    }

    /**
     * Get the value of passwd_answer
     */ 
    public function getPasswd_answer()
    {
        return $this->passwd_answer;
    }

    /**
     * Set the value of passwd_answer
     *
     * @return  self
     */ 
    public function setPasswd_answer($passwd_answer)
    {
        $this->passwd_answer = $passwd_answer;

        return $this;
    }

    /**
     * Get the value of user_picture
     */ 
    public function getUser_picture()
    {
        return $this->user_picture;
    }

    /**
     * Set the value of user_picture
     *
     * @return  self
     */ 
    public function setUser_picture($user_picture)
    {
        $this->user_picture = $user_picture;

        return $this;
    }

    /**
     * Get the value of old_user_picture
     */ 
    public function getOld_user_picture()
    {
        return $this->old_user_picture;
    }

    /**
     * Set the value of old_user_picture
     *
     * @return  self
     */ 
    public function setOld_user_picture($old_user_picture)
    {
        $this->old_user_picture = $old_user_picture;

        return $this;
    }

    /**
     * Get the value of report_time
     */ 
    public function getReport_time()
    {
        return $this->report_time;
    }

    /**
     * Set the value of report_time
     *
     * @return  self
     */ 
    public function setReport_time($report_time)
    {
        $this->report_time = $report_time;

        return $this;
    }
}
