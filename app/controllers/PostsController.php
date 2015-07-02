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

		$im = imagecreatetruecolor(600, 375);
		$backgroundColor = imagecolorallocate($im, 0, 18, 64);
		imagefill($im, 0, 0, $backgroundColor);

		$box = new Box($im);
		$box->setFontFace(public_path('HelveticaNeue-Medium.ttf')); // http://www.dafont.com/franchise.font
		$box->setFontColor(new Color(255, 75, 140));
		$box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
		$box->setFontSize(24);
		$box->setBox(20, 20, 460, 460);
		$box->setTextAlign('center', 'center');
		$box->draw("Đa tình tự cổ không như hận \n Câu này của ai vậy trời \n");

		header("Content-type: image/png");
		imagepng($im);
	}




	public function postStore()
	{
		require app_path().'/start/boximage/Box.php';
		require app_path().'/start/boximage/Color.php';

		//dd(Input::all());

		$width = 600;

		if(! Input::hasFile('image'))
		{
			// DEFAULT public/uploads/default/default.png
			$im = imagecreatefromjpeg(public_path('uploads/default/default.jpg'));
			$height = 600;
		}else
		{
			// have file upload
		}
		$save = nl2br(Input::get('body'));

		$save = str_replace("<br />", "", $save)."\n\n\n- Quang Author -";

		// $im = imagecreatetruecolor(600, 375);
		// $backgroundColor = imagecolorallocate($im, 51, 153, 255);
		// imagefill($im, 0, 0, $backgroundColor);

		$box = new Box($im);
		$box->setFontFace(public_path('HelveticaNeue-Medium.ttf')); 
		$box->setFontColor(new Color(255, 255, 255));
		$box->setFontSize(24);
		$box->setBox(20, 20, $width, $height);
		$box->setTextAlign('center', 'center');
		$box->draw($save);

		header("Content-type: image/png");
		imagepng($im);
	}




	public function getResize()
	{
		Image::make(public_path('uploads/default/default.png'))->resize(600, 600)->save(public_path('uploads/default/default.jpg'));
	}

}