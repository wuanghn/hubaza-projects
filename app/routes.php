<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/







// Route::controller('post','DucAnhController');

Route::get('post/{slug}','PostsController@detail');

Route::group(array('prefix' => 'admin'), function()
{

    Route::controller('member','MembersController');

});

Route::controller('/','PostsController');

// allway at bottom file




