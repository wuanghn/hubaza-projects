<?php

class Member extends \Eloquent 
{
	protected $table="members";
	protected $guarded = array();

	public function posts()
    {
        return $this->hasMany('Post','id_user');
    }

    public function delete()
    {
        // delete all related photos 
        $this->posts()->delete();
        // as suggested by Dirk in comment,
        // it's an uglier alternative, but faster
        // Photo::where("user_id", $this->id)->delete()

        // delete the user
        return parent::delete();
    }	
}