<?php
use GDText\Box;
use GDText\Color;

class PostsController extends \BaseController 
{
	public function getIndex()
	{
		// 
	}



	public function getLoginFb()
	{
		// get data from input
		    $code = Input::get( 'code' );

		    // get fb service
		    $fb = OAuth::consumer( 'Facebook' );

		    // check if code is valid

		    // if code is provided get user data and sign in
		    if ( !empty( $code ) ) {

		        // This was a callback request from facebook, get the token
		        $token = $fb->requestAccessToken( $code );

		        // Send a request with it
		        $result = json_decode( $fb->request( '/me' ), true );

		        $info_user = Member::firstOrCreate(array('email' => $result['email'], 'fullname' => $result['name']));

		        Session::put('info_user', $info_user);


		        return Redirect::to('/');

		    }
		    // if not ask for permission first
		    else {
		        // get fb authorization
		        $url = $fb->getAuthorizationUri();

		        // return to facebook login url
		         return Redirect::to( (string)$url );
		    }
	}



	public function detail($slug)
	{
		$post = Post::find($this->getLastId($slug));
		if($post->slug == $slug)
		{
			$post->url_page = url('posts/'.$slug);
			$post->url_image = asset('public/'.$post->image);
			$post_new = Post::orderBy('id','desc')->take(5)->get();
			return View::make('posts.show',compact('post','post_new'));
		}else
		{
			return Redirect::to('/');
		}
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

		$user = Session::get('info_user');

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

		$post = Post::create([
			"title" => Input::get('title'),
			"quote" => Input::get('body'),
			"image" => "uploads/store/$radomString.jpg",
			"created" => $this->timenow(),
			"id_user" => $user->id
		]);


		// update slug
		$slug = Str::slug(Input::get('title'))."-".$post->id;
		Post::updateOrCreate(array('id' => $post->id), array('slug' => $slug));

		return Redirect::to($slug);

	}




	public function timenow()
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		    $weekday = date("l");
		    return $weekday.', '.date('d/m/Y');
	}




	public function getLastId($slug)
	{
		$arr = explode('-', $slug);
		return end($arr);
	}


}