<?php

class Post extends \Eloquent {
	//protected $fillable = [];
	protected $table = "posts";
	protected $guarded = array();

	public function member()
   {
       return $this->belongsTo('Member');
   }

}