<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url()}}/public/layouts/default/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url()}}/public/layouts/default/css/rrssb.css" />

    <!-- Custom CSS -->
  



    <!-- css by Duc Anh-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('public/assets/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/login.css')}}" rel="stylesheet">

    <title>Login</title>

  </head>

  <body>
    <nav>
      <div class="container da_container_login">
        <a class="navbar-brand" href="{{url()}}">IZquote</a>
      </div>

    </nav>
    <div class="container da_container">
        <div class="row">
          <div class="col-md-6 div_login_center">
            <h2>Login</h2>
            <div>
              <a class="btn btn-block btn-social btn-facebook" href="{{url('login-fb')}}">
                <i class="fa fa-facebook"></i> Sign in with Facebook
            </a>

             

            <a class="btn btn-block btn-social btn-google" href="{{url('login-gg')}}">
                <i class="fa fa-google"></i> Sign in with Google
            </a>
            </div>
          </div>
        </div>
    </div>
    
  </body>
</html>
