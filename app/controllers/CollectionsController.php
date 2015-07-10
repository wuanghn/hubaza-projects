<?php

class CollectionsController extends \BaseController {

	public function getIndex()
	{
		return View::make('collections.index');
	}


	public function postStore()
	{
		if(Input::get('name') == '')
		{
			Input::get('dropdown_collect');
		}
	}



	public function addNewCollect()
	{
		// 
	}

}