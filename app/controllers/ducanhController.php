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
		$content = DB::table('posts')->skip(0)->take(2)->orderBy('id', 'desc')->get();

		return View::make('home.home', array('content' => $content));
	}

	function getContents(){
		$skip = intval(Input::get('skip')) +2;

		$content = DB::table('posts')->skip($skip)->take(2)->orderBy('id', 'desc')->get();

		$arr['contents'] = $content;
		$arr['skip'] = $skip;
		return json_encode($arr);
	}


}
