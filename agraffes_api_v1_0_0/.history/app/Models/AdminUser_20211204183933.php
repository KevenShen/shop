<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
  protected $table = 'admin_user';
  protected $primaryKey = 'id';
  public $timestamps = true;
  protected $fillable = array('admin_token', 'user_name', 'email', 'admin_user_img', 'password', 'parent_id', 'ru_id', 'rs_id', 'action_list', 'nav_list', 'lang_type', 'agency_id', 'suppliers_id', 'role_id', 'todolist', 'created_at', 'updated_at');
  protected $guarded = array();



  /**
   * Get the value of token
   */
  public function getAdminToken()
  {
    return $this->admin_token;
  }

  /**
   * Set the value of token
   * @return  self
   */
  public function setAdminToken($value)
  {
    $this->admin_token = $value;
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
   * Get the value of admin_user_img
   */
  public function getAdminUserImg()
  {
    return $this->admin_user_img;
  }

  /**
   * Set the value of admin_user_img
   * @return  self
   */
  public function setAdminUserImg($value)
  {
    $this->admin_user_img = $value;
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
   * Get the value of ru_id
   */
  public function getRuId()
  {
    return $this->ru_id;
  }

  /**
   * Set the value of ru_id
   * @return  self
   */
  public function setRuId($value)
  {
    $this->ru_id = $value;
    return $this;
  }

  /**
   * Get the value of rs_id
   */
  public function getRsId()
  {
    return $this->rs_id;
  }

  /**
   * Set the value of rs_id
   * @return  self
   */
  public function setRsId($value)
  {
    $this->rs_id = $value;
    return $this;
  }

  /**
   * Get the value of action_list
   */
  public function getActionList()
  {
    return $this->action_list;
  }

  /**
   * Set the value of action_list
   * @return  self
   */
  public function setActionList($value)
  {
    $this->action_list = $value;
    return $this;
  }

  /**
   * Get the value of nav_list
   */
  public function getNavList()
  {
    return $this->nav_list;
  }

  /**
   * Set the value of nav_list
   * @return  self
   */
  public function setNavList($value)
  {
    $this->nav_list = $value;
    return $this;
  }

  /**
   * Get the value of lang_type
   */
  public function getLangType()
  {
    return $this->lang_type;
  }

  /**
   * Set the value of lang_type
   * @return  self
   */
  public function setLangType($value)
  {
    $this->lang_type = $value;
    return $this;
  }

  /**
   * Get the value of agency_id
   */
  public function getAgencyId()
  {
    return $this->agency_id;
  }

  /**
   * Set the value of agency_id
   * @return  self
   */
  public function setAgencyId($value)
  {
    $this->agency_id = $value;
    return $this;
  }

  /**
   * Get the value of suppliers_id
   */
  public function getSuppliersId()
  {
    return $this->suppliers_id;
  }

  /**
   * Set the value of suppliers_id
   * @return  self
   */
  public function setSuppliersId($value)
  {
    $this->suppliers_id = $value;
    return $this;
  }

  /**
   * Get the value of role_id
   */
  public function getRoleId()
  {
    return $this->role_id;
  }

  /**
   * Set the value of role_id
   * @return  self
   */
  public function setRoleId($value)
  {
    $this->role_id = $value;
    return $this;
  }

  /**
   * Get the value of todolist
   */
  public function getTodolist()
  {
    return $this->todolist;
  }

  /**
   * Set the value of todolist
   * @return  self
   */
  public function setTodolist($value)
  {
    $this->todolist = $value;
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
