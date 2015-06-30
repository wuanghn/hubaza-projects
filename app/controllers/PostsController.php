<?php

class PostsController extends \BaseController 
{
	public function getIndex()
	{
		$img = Image::make(public_path('foo.png'));

		// use callback to define details
		// $img->text('It provides an easier and expressive', 300, 250, function($font) {
		// 	$font->file(public_path('HelveticaNeue-Medium.ttf'));
		//     $font->size(35);
		//     $font->color('#fdf6e3');
		//     $font->align('center');
		// });
		// $img->text('The quick brown fox jumps over the lazy dog.');
		//$img->greyscale();


		// add filter
		$img->colorize(0, 30, 0);

		return $img->response();
		//$img->save(public_path('save.jpg'));
	}

	public function getTestImage()
	{
		// 
	}

}