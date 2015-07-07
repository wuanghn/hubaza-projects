<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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



    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url()}}/public/layouts/default/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url()}}/public/layouts/default/css/rrssb.css" />

    <!-- Custom CSS -->
    <link href="{{url()}}/public/layouts/default/css/blog-home.css" rel="stylesheet">



    <!-- css by Duc Anh-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('public/assets/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/style_da.css')}}" rel="stylesheet">





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{url()}}/public/layouts/default/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="{{url()}}/public/layouts/default/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="//connect.facebook.net/en_US/all.js"></script>

</head>

<body>

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


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url()}}/public/layouts/default/js/bootstrap.min.js"></script>

    <script src="{{url()}}/public/layouts/default/js/rrssb.js"></script>


   
   
    <script src="{{asset('public/assets/js/home.js')}}"></script>




</body>

</html>
