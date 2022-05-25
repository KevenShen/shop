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
    protected $primaryKey = 'id';
    protected $fillable = array('configure_id', 'user_picture', 'email', 'first_name', 'last_name', 'password', 'question', 'answer', 'sex', 'birthday', 'address_id', 'last_login', 'last_time', 'last_ip', 'visit_count', 'token', 'flag', 'alias', 'msn', 'office_phone', 'home_phone', 'mobile_phone', 'is_validated', 'passwd_question', 'passwd_answer', 'report_time', 'created_at', 'updated_at');
    protected $guarded = array();
    /**
     * Get the value of configure_id
     */
    public function getConfigureId()
    {
        return $this->configure_id;
    }

    /**
     * Set the value of configure_id
     * @return  self
     */
    public function setConfigureId($value)
    {
        $this->configure_id = $value;
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
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     * @return  self
     */
    public function setFirstName($value)
    {
        $this->first_name = $value;
        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     * @return  self
     */
    public function setLastName($value)
    {
        $this->last_name = $value;
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
     * Get the value of token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     * @return  self
     */
    public function setToken($value)
    {
        $this->token = $value;
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
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     * @return  self
     */
    public function setCreatedAt($value)
    {
        $this->created_at = $value;
        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     * @return  self
     */
    public function setUpdatedAt($value)
    {
        $this->updated_at = $value;
        return $this;
    }
}
