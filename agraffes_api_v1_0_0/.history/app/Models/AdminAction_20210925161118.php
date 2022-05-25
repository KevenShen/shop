<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAction extends Model
{
    use HasFactory;
    protected $table = 'admin_action';
	protected $primaryKey = 'action_id';
	public $timestamps = false;
	protected $fillable = array('parent_id', 'action_code', 'relevance', 'seller_show');
	protected $guarded = array();

    /**
     * Get the value of parent_id
     */ 
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * Set the value of parent_id
     *
     * @return  self
     */ 
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * Get the value of action_code
     */ 
    public function getAction_code()
    {
        return $this->action_code;
    }

    /**
     * Set the value of action_code
     *
     * @return  self
     */ 
    public function setAction_code($action_code)
    {
        $this->action_code = $action_code;

        return $this;
    }

    /**
     * Get the value of relevance
     */ 
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * Set the value of relevance
     *
     * @return  self
     */ 
    public function setRelevance($relevance)
    {
        $this->relevance = $relevance;

        return $this;
    }

    /**
     * Get the value of seller_show
     */ 
    public function getSeller_show()
    {
        return $this->seller_show;
    }

    /**
     * Set the value of seller_show
     *
     * @return  self
     */ 
    public function setSeller_show($seller_show)
    {
        $this->seller_show = $seller_show;

        return $this;
    }
}
