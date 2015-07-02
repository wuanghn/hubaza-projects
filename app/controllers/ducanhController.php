<?php

class DucAnhController extends \BaseController {

	
	public function getIndex()
	{
		return View::make('posts.create');
	}

	function getTest(){
		var_dump(Input::all()) ;
	}

	function getHome(){
		return View::make('home.home');
	}


}
