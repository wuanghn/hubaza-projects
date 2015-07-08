<?php

class MembersController extends \BaseController 
{

	public function getIndex()
	{
		$members = Member::paginate(15);
		//return View::make('members.index');
		return View::make('layouts.admin.master',compact('members'));
	}



	public function getDelete()
	{
		Member::find(1)->delete(Input::get('id'));
		return Redirect::back();
	}



	public function getBanned()
	{
		Member::updateOrCreate(array('id' => Input::get('id')), array('banned' => Input::get('ban')));
		return Redirect::back();
	}	

}