<?php

class ducanhController extends \BaseController {

	
	public function getIndex()
	{
		return View::make('posts.create');
	}


}
