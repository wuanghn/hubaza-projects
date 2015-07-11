<?php

class CollectionsController extends \BaseController {

	public function getIndex()
	{
		return View::make('collections.index');
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


		DB::table('collects')->insert(['id_post' => $id_post,'id_collects' => $collect_id]);

		echo "done";
	}



	public function addNewCollect()
	{
		// return last id
		return Collection::insertGetId(['name'=>Input::get('name')]); 
	}

}