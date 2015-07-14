<?php

class CollectionsController extends \BaseController {

	public function getIndex()
	{
		$id_user = Session::get('info_user')->id;
		//get list collection
		$collection = DB::table('collections as col')
		->where('col.id_user', $id_user)
		->orderBy('col.id', 'desc')
		->get(); 

		//lấy ra image của post mới nhất
		$images = array();
		foreach($collection as $key){
			$img = DB::table('collect_post as colp')
			->join('posts as post', 'post.id', '=', 'colp.id_post')
			->where('colp.id_collects', $key->id)
			->orderBy('colp.id', 'desc')
			->select('post.image')
			->first();

			if(count($img) == 0)
				$key->image = asset('public/default_collection.jpg');
			else
				$key->image = $img->image;
		}

		// var_dump($collection);die;

		return View::make('collections.index', array('collection' => $collection ));
	}



	public function getDeleteCollection($id){
		$id_user = Session::get('info_user')->id;

//delete collections
		$collect = DB::table('collections')->where('id_user', $id_user)
		->where('id', $id)
		->delete();

		if($collect){
			//delete collec_post
			$collect = DB::table('collect_post')
			->where('id_collects', $id)
			->delete();
		}
		return Redirect::to('collect');
	}


	function getDetail($id){
		//get all post in collection

		$list = DB::table('collections as col')
		->join('collect_post as colp', 'col.id','=', 'colp.id_collects')
		->join('posts as post', 'post.id', '=', 'colp.id_post')
		->where('col.id', $id)
		->select('post.title', 'post.slug', 'colp.id as id_post', 'post.image', 'col.name')
		->orderBy('colp.id', 'desc')
		->get();

		$name = DB::table('collections')->where('id', $id)
		->select('name', 'id')
		->first();

		return View::make('collections.show', array('list' => $list, 'name'=> $name));
	}



	function getDeletePost($id_collect, $id){
		$id_user = Session::get('info_user')->id;
		// var_dump($id);die;

		$post = DB::table('collect_post as colp')
		->join('collections as col', 'col.id', '=', 'colp.id_collects')
		->where('colp.id', $id)
		->where('col.id', $id_collect)
		->where('col.id_user', $id_user)
		->first();

		if(count($post) ==1){
			DB::table('collect_post')->where('id', $id)->delete();
		}


		return Redirect::to('collect/detail/'.$id_collect);

	}


	public function postStore()
	{
		// get id user
		if($_SERVER['SERVER_NAME'] == 'localhost')
		{
			$id_user = 7;
		}else
		{
			$id_user = Session::get('info_user')->id;
		}


		if(Input::get('name') == '')
		{
			// dùng albums default
			if(Input::get('dropdown_collect') == 0)
			{
				// nếu không chon album
				$collect = Collection::firstOrCreate(array('name' => 'default','id_user'=>$id_user));
				$collect_id = $collect->id;
			}else{
				$collect_id = Input::get('dropdown_collect');
			}

			// have had collect_id

		}else
		{
			$collect = Collection::firstOrCreate(array('name'=>Input::get('name'),'id_user'=>$id_user));
			$collect_id = $collect->id;
		}

		// have id collect & idpost [$collect_id,$id]
		$id_post = Input::get('id');

		$check_exist = $this->check_exist_data($id_post,$collect_id);
		if($check_exist == true)
		{
			DB::table('collect_post')->insert(['id_post' => $id_post,'id_collects' => $collect_id]);
		}
	}




	public function check_exist_data($id_post,$collect_id)
	{
		$user_favorites = DB::table('collect_post')
		->where('id_post', '=', $id_post)
		->where('id_collects', '=', $collect_id)
		->first();

		if (is_null($user_favorites)) {
		    // It does not exist - add to favorites button will show
			return true;
		} else {
		    // It exists - remove from favorites button will show
			return false;
		}
	}




	public function addNewCollect()
	{
		// return last id
		return Collection::insertGetId(['name'=>Input::get('name')]); 
	}



}