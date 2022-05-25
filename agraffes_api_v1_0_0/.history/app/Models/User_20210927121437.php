<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = array('aite_id', 'email', 'first_name', 'last_name', 'password', 'question', 'answer', 'sex', 'birthday', 'user_money', 'frozen_money', 'pay_points', 'rank_points', 'address_id', 'reg_time', 'last_login', 'last_time', 'last_ip', 'visit_count', 'user_rank', 'is_special', 'ec_salt', 'salt', 'drp_parent_id', 'parent_id', 'flag', 'alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'is_validated', 'credit_line', 'passwd_question', 'passwd_answer', 'user_picture', 'old_user_picture', 'report_time');
    protected $guarded = array();




    /**
     * Get the value of aite_id
     */
    public function getAiteId()
    {
        return $this->aite_id;
    }

    /**
     * Set the value of aite_id
     * @return  self
     */
    public function setAiteId($value)
    {
        $this->aite_id = $value;
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
     * @return  self
     */
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }

    /**
     * Get the value of user_name
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set the value of user_name
     * @return  self
     */
    public function setUserName($value)
    {
        $this->user_name = $value;
        return $this;
    }

    /**
     * Get the value of nick_name
     */
    public function getNickName()
    {
        return $this->nick_name;
    }

    /**
     * Set the value of nick_name
     * @return  self
     */
    public function setNickName($value)
    {
        $this->nick_name = $value;
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
     * @return  self
     */
    public function setPassword($value)
    {
        $this->password = $value;
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
     * @return  self
     */
    public function setQuestion($value)
    {
        $this->question = $value;
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
     * @return  self
     */
    public function setAnswer($value)
    {
        $this->answer = $value;
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
     * @return  self
     */
    public function setSex($value)
    {
        $this->sex = $value;
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
     * @return  self
     */
    public function setBirthday($value)
    {
        $this->birthday = $value;
        return $this;
    }

    /**
     * Get the value of user_money
     */
    public function getUserMoney()
    {
        return $this->user_money;
    }

    /**
     * Set the value of user_money
     * @return  self
     */
    public function setUserMoney($value)
    {
        $this->user_money = $value;
        return $this;
    }

    /**
     * Get the value of frozen_money
     */
    public function getFrozenMoney()
    {
        return $this->frozen_money;
    }

    /**
     * Set the value of frozen_money
     * @return  self
     */
    public function setFrozenMoney($value)
    {
        $this->frozen_money = $value;
        return $this;
    }

    /**
     * Get the value of pay_points
     */
    public function getPayPoints()
    {
        return $this->pay_points;
    }

    /**
     * Set the value of pay_points
     * @return  self
     */
    public function setPayPoints($value)
    {
        $this->pay_points = $value;
        return $this;
    }

    /**
     * Get the value of rank_points
     */
    public function getRankPoints()
    {
        return $this->rank_points;
    }

    /**
     * Set the value of rank_points
     * @return  self
     */
    public function setRankPoints($value)
    {
        $this->rank_points = $value;
        return $this;
    }

    /**
     * Get the value of address_id
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * Set the value of address_id
     * @return  self
     */
    public function setAddressId($value)
    {
        $this->address_id = $value;
        return $this;
    }

    /**
     * Get the value of reg_time
     */
    public function getRegTime()
    {
        return $this->reg_time;
    }

    /**
     * Set the value of reg_time
     * @return  self
     */
    public function setRegTime($value)
    {
        $this->reg_time = $value;
        return $this;
    }

    /**
     * Get the value of last_login
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Set the value of last_login
     * @return  self
     */
    public function setLastLogin($value)
    {
        $this->last_login = $value;
        return $this;
    }

    /**
     * Get the value of last_time
     */
    public function getLastTime()
    {
        return $this->last_time;
    }

    /**
     * Set the value of last_time
     * @return  self
     */
    public function setLastTime($value)
    {
        $this->last_time = $value;
        return $this;
    }

    /**
     * Get the value of last_ip
     */
    public function getLastIp()
    {
        return $this->last_ip;
    }

    /**
     * Set the value of last_ip
     * @return  self
     */
    public function setLastIp($value)
    {
        $this->last_ip = $value;
        return $this;
    }

    /**
     * Get the value of visit_count
     */
    public function getVisitCount()
    {
        return $this->visit_count;
    }

    /**
     * Set the value of visit_count
     * @return  self
     */
    public function setVisitCount($value)
    {
        $this->visit_count = $value;
        return $this;
    }

    /**
     * Get the value of user_rank
     */
    public function getUserRank()
    {
        return $this->user_rank;
    }

    /**
     * Set the value of user_rank
     * @return  self
     */
    public function setUserRank($value)
    {
        $this->user_rank = $value;
        return $this;
    }

    /**
     * Get the value of is_special
     */
    public function getIsSpecial()
    {
        return $this->is_special;
    }

    /**
     * Set the value of is_special
     * @return  self
     */
    public function setIsSpecial($value)
    {
        $this->is_special = $value;
        return $this;
    }

    /**
     * Get the value of ec_salt
     */
    public function getEcSalt()
    {
        return $this->ec_salt;
    }

    /**
     * Set the value of ec_salt
     * @return  self
     */
    public function setEcSalt($value)
    {
        $this->ec_salt = $value;
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
     * @return  self
     */
    public function setSalt($value)
    {
        $this->salt = $value;
        return $this;
    }

    /**
     * Get the value of drp_parent_id
     */
    public function getDrpParentId()
    {
        return $this->drp_parent_id;
    }

    /**
     * Set the value of drp_parent_id
     * @return  self
     */
    public function setDrpParentId($value)
    {
        $this->drp_parent_id = $value;
        return $this;
    }

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
     * Get the value of flag
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set the value of flag
     * @return  self
     */
    public function setFlag($value)
    {
        $this->flag = $value;
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
     * @return  self
     */
    public function setAlias($value)
    {
        $this->alias = $value;
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
     * @return  self
     */
    public function setMsn($value)
    {
        $this->msn = $value;
        return $this;
    }

    /**
     * Get the value of qq
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set the value of qq
     * @return  self
     */
    public function setQq($value)
    {
        $this->qq = $value;
        return $this;
    }

    /**
     * Get the value of office_phone
     */
    public function getOfficePhone()
    {
        return $this->office_phone;
    }

    /**
     * Set the value of office_phone
     * @return  self
     */
    public function setOfficePhone($value)
    {
        $this->office_phone = $value;
        return $this;
    }

    /**
     * Get the value of home_phone
     */
    public function getHomePhone()
    {
        return $this->home_phone;
    }

    /**
     * Set the value of home_phone
     * @return  self
     */
    public function setHomePhone($value)
    {
        $this->home_phone = $value;
        return $this;
    }

    /**
     * Get the value of mobile_phone
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * Set the value of mobile_phone
     * @return  self
     */
    public function setMobilePhone($value)
    {
        $this->mobile_phone = $value;
        return $this;
    }

    /**
     * Get the value of is_validated
     */
    public function getIsValidated()
    {
        return $this->is_validated;
    }

    /**
     * Set the value of is_validated
     * @return  self
     */
    public function setIsValidated($value)
    {
        $this->is_validated = $value;
        return $this;
    }

    /**
     * Get the value of credit_line
     */
    public function getCreditLine()
    {
        return $this->credit_line;
    }

    /**
     * Set the value of credit_line
     * @return  self
     */
    public function setCreditLine($value)
    {
        $this->credit_line = $value;
        return $this;
    }

    /**
     * Get the value of passwd_question
     */
    public function getPasswdQuestion()
    {
        return $this->passwd_question;
    }

    /**
     * Set the value of passwd_question
     * @return  self
     */
    public function setPasswdQuestion($value)
    {
        $this->passwd_question = $value;
        return $this;
    }

    /**
     * Get the value of passwd_answer
     */
    public function getPasswdAnswer()
    {
        return $this->passwd_answer;
    }

    /**
     * Set the value of passwd_answer
     * @return  self
     */
    public function setPasswdAnswer($value)
    {
        $this->passwd_answer = $value;
        return $this;
    }

    /**
     * Get the value of user_picture
     */
    public function getUserPicture()
    {
        return $this->user_picture;
    }

    /**
     * Set the value of user_picture
     * @return  self
     */
    public function setUserPicture($value)
    {
        $this->user_picture = $value;
        return $this;
    }

    /**
     * Get the value of old_user_picture
     */
    public function getOldUserPicture()
    {
        return $this->old_user_picture;
    }

    /**
     * Set the value of old_user_picture
     * @return  self
     */
    public function setOldUserPicture($value)
    {
        $this->old_user_picture = $value;
        return $this;
    }

    /**
     * Get the value of report_time
     */
    public function getReportTime()
    {
        return $this->report_time;
    }

    /**
     * Set the value of report_time
     * @return  self
     */
    public function setReportTime($value)
    {
        $this->report_time = $value;
        return $this;
    }
}
