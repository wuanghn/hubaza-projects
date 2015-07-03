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
		// Create a 55x30 image
		$im = imagecreatetruecolor(55, 30);
		$red = imagecolorallocate($im, 255, 0, 0);
		$black = imagecolorallocate($im, 0, 0, 0);

		// Make the background transparent
		imagecolortransparent($im, $black);

		// Draw a red rectangle
		imagefilledrectangle($im, 4, 4, 50, 25, $red);

		// Output and free memory
		header('Content-type: image/png');
		imagepng($im);
		imagedestroy($im);
		// imagedestroy($image);
		// imagedestroy($watermark);
	}




	public function postStore()
	{
		require app_path().'/start/boximage/Box.php';
		require app_path().'/start/boximage/Color.php';

		//dd(Input::all());

		$width = 600;
		$radomString = substr(number_format(time() * mt_rand(),0,'',''),0,8);

		if(Input::get('author') == "")
			$author = "";
		else
			$author = "\n\n\n-".Input::get('author')."-";
		
		if(! Input::hasFile('image'))
		{
			// DEFAULT public/uploads/default/default.png
			$im = imagecreatefromjpeg(public_path('uploads/default/default.jpg'));
			$height = 600;
		}else
		{
			
			$height = Input::get('height');

			$filename = public_path("uploads/default/$radomString.jpg");

			Image::make(Input::file('image')->getRealPath())->resize($width,$height)->colorize(-20, -20, -20)->save($filename);

			$im = imagecreatefromjpeg($filename);

		}
		$save = nl2br(Input::get('body'));

		$save = str_replace("<br />", "", $save).$author;


		// add watermark watermar.png
		$stamp = imagecreatefrompng(public_path("watermark.png"));

		// Set the margins for the stamp and get the height/width of the stamp image
		$marge_right = 10;
		$marge_bottom = 10;
		$sx = imagesx($stamp);
		$sy = imagesy($stamp);

		// Copy the stamp image onto our photo using the margin offsets and the photo 
		// width to calculate positioning of the stamp. 
		imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));



		$box = new Box($im);
		$box->setFontFace(public_path('HelveticaNeue-Medium.ttf')); 
		$box->setFontColor(new Color(255, 255, 255));
		$box->setFontSize(32);
		$box->setBox(0,0, $width, $height);
		$box->setTextAlign('center', 'center');
		$box->draw($save);

		// header('Content-Type: image/jpeg');
		// imagejpeg($im); 
		
		imagejpeg($im, public_path("uploads/store/$radomString.jpg")); 

		Post::create([
			"title" => Input::get('title'),
			"image" => "uploads/store/$radomString.jpg",
			"created" => $this->timenow(),
			"id_user" => 7
		]);
	}




	public function timenow()
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		    $weekday = date("l");
		    // $weekday = strtolower($weekday);
		    // switch($weekday) {
		    //     case 'monday':
		    //         $weekday = 'Thứ hai';
		    //         break;
		    //     case 'tuesday':
		    //         $weekday = 'Thứ ba';
		    //         break;
		    //     case 'wednesday':
		    //         $weekday = 'Thứ tư';
		    //         break;
		    //     case 'thursday':
		    //         $weekday = 'Thứ năm';
		    //         break;
		    //     case 'friday':
		    //         $weekday = 'Thứ sáu';
		    //         break;
		    //     case 'saturday':
		    //         $weekday = 'Thứ bảy';
		    //         break;
		    //     default:
		    //         $weekday = 'Chủ nhật';
		    //         break;
		    // }
		    return $weekday.', '.date('d/m/Y');
	}
	// public function getResize()
	// {
	// 	Image::make(public_path('uploads/default/default.png'))->resize(600, 600)->save(public_path('uploads/default/default.jpg'));
	// }

}