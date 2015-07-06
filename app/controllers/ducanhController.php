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
		$content = DB::table('posts as post')
		->leftjoin('members as mem', 'mem.id', '=', 'post.id_user')
		->skip(0)->take(2)->orderBy('post.id', 'desc')
		->select('post.id', 'post.created', 'mem.fullname', 'post.title', 'post.image', 'post.slug')
		->get();

		return View::make('posts.index', array('content' => $content));
	}

	function getContents(){
		$skip = intval(Input::get('skip')) +2;

		$content = DB::table('posts as post')
		->leftjoin('members as mem', 'mem.id', '=', 'post.id_user')
		->skip($skip)->take(2)->orderBy('post.id', 'desc')
		->select('post.id', 'post.created', 'mem.fullname', 'post.title', 'post.image', 'post.slug')
		->get();

		$arr['contents'] = $content;
		$arr['skip'] = $skip;
		return json_encode($arr);
	}


}
