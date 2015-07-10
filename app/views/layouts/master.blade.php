<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{url('public/icon-izquote.png')}}">

    <!-- fb -->
    @if(isset($post))
    <meta property="og:url" content="{{url($post->slug)}}">
    <meta property="og:image" itemprop="thumbnailUrl" content="{{asset('/public')}}/{{$post->image}}">
    <meta property="og:title" itemprop="headline" content="{{$post->title}}">
    <meta property="og:description" content="{{$post->quote}}">
    @else
    <meta property="og:url" content="{{url()}}">
    <meta property="og:image" itemprop="thumbnailUrl" content="{{asset('/public/assets/img/image.png')}}">
    <meta property="og:title" itemprop="headline" content="IZquote · The coolest quote generator">
    <meta property="og:description" content="Create your own quote at: izquote.com">
    @endif



    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url()}}/public/layouts/default/css/bootstrap.min.css" rel="stylesheet">

    <!-- css layout collection -->
     <link rel="stylesheet" href="{{url()}}/public/assets/css/3-col-portfolio.css" />

    <link rel="stylesheet" href="{{url()}}/public/layouts/default/css/rrssb.css" />

    <!-- Custom CSS -->
    <link href="{{url()}}/public/layouts/default/css/blog-home.css" rel="stylesheet">



    <!-- css by Duc Anh-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('public/assets/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/style_da.css')}}" rel="stylesheet">



    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">







    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{url()}}/public/layouts/default/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="{{url()}}/public/layouts/default/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="//connect.facebook.net/en_US/all.js"></script>

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-63312596-4', 'auto');
      ga('send', 'pageview');

      </script>

  </head>

  @if(Request::segment(1) =="" || Request::segment(1) == "/")
  <body style="background-color:#F4F4F4"> </body>


  @else
  <body>


    @endif


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=642172092538987";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  @include('layouts.header')

  <!-- Page Content -->
  <div class="container">

    <!-- start width row -->
    <!-- example -->
                    <!-- <div class="row">
                </div> -->
                @yield('content')
                <!--\ example -->
                <!--\ start width row -->

            </div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="{{url()}}/public/layouts/default/js/jquery.js"></script>

            <script src="{{url()}}/public/assets/js/notify.js"></script>


            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> 

            <!-- Bootstrap Core JavaScript -->
            <script src="{{url()}}/public/layouts/default/js/bootstrap.min.js"></script>

            <script src="{{url()}}/public/layouts/default/js/rrssb.js"></script>

            <!-- Latest compiled and minified JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>




            <script src="{{asset('public/assets/js/home.js')}}"></script>
            <script src="{{asset('public/assets/js/post_da.js')}}"></script>




        </body>

        </html>
