<?php

class DucAnhController extends \BaseController {

	
	public function getIndex()
	{
		return View::make('posts.create');
	}

	function getTest(){
		var_dump(nl2br(Input::get('body'))) ;
	}


}
