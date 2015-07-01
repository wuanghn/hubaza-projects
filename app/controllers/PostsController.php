<?php
use GDText\Box;
use GDText\Color;

class PostsController extends \BaseController 
{
	public function getIndex()
	{
		$img = Image::make(public_path('foo.png'));

		// use callback to define details
		$img->text("Đa tình tự cổ không như hận \n Câu này của ai vậy trời \n", 372, 300, function($font) {
			$font->file(public_path('HelveticaNeue-Medium.ttf'));
		    $font->size(35);
		    $font->color('#fdf6e3');
		    $font->align('center');
		    $font->valign('middle');
		});
		// $img->text('The quick brown fox jumps over the lazy dog.');
		//$img->greyscale();


		// add filter
		//$img->colorize(0, 30, 0);

		// $watermark = Image::make('public/watermark.png');
		// $img->insert($watermark, 'center');

		return $img->response();
		//$img->save(public_path('save.jpg'));
	}




	public function getTestImage()
	{
		require app_path().'/start/boximage/Box.php';
		require app_path().'/start/boximage/Color.php';

		$im = imagecreatetruecolor(500, 500);
		$backgroundColor = imagecolorallocate($im, 0, 18, 64);
		imagefill($im, 0, 0, $backgroundColor);

		$box = new Box($im);
		$box->setFontFace(public_path('HelveticaNeue-Medium.ttf')); // http://www.dafont.com/franchise.font
		$box->setFontColor(new Color(255, 75, 140));
		$box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
		$box->setFontSize(40);
		$box->setBox(20, 20, 460, 460);
		$box->setTextAlign('center', 'center');
		$box->draw("Đa tình tự cổ không như hận \n Câu này của ai vậy trời \n");

		header("Content-type: image/png");
		imagepng($im);
	}



	public function postStore()
	{
		dd(Input::all());
	}

}