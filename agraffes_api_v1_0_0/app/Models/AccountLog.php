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


    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     * @return  self
     */
    public function setUserId($value)
    {
        $this->user_id = $value;
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
     * Get the value of deposit_fee
     */
    public function getDepositFee()
    {
        return $this->deposit_fee;
    }

    /**
     * Set the value of deposit_fee
     * @return  self
     */
    public function setDepositFee($value)
    {
        $this->deposit_fee = $value;
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
     * Get the value of change_time
     */
    public function getChangeTime()
    {
        return $this->change_time;
    }

    /**
     * Set the value of change_time
     * @return  self
     */
    public function setChangeTime($value)
    {
        $this->change_time = $value;
        return $this;
    }

    /**
     * Get the value of change_desc
     */
    public function getChangeDesc()
    {
        return $this->change_desc;
    }

    /**
     * Set the value of change_desc
     * @return  self
     */
    public function setChangeDesc($value)
    {
        $this->change_desc = $value;
        return $this;
    }

    /**
     * Get the value of change_type
     */
    public function getChangeType()
    {
        return $this->change_type;
    }

    /**
     * Set the value of change_type
     * @return  self
     */
    public function setChangeType($value)
    {
        $this->change_type = $value;
        return $this;
    }
}
