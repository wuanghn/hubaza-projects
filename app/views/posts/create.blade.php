<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/assets/css/style_da.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <form action="#" method="post" enctype="multipart/form-data" id="da_form_post" >
            
            <div class="col-md-7 col-xs-offset-1">
                <div>
                    <div class="da_backgroup"></div>
                <a class="da_choose_file" href="#">Change Background</a>
                </div>
                <div style="width: 600px">
                    <p class="da_div_quote">Text here</p>
                     <p class="da_div_author"></p>
                <img  class="img-responsive da_img_post" src="https://media2.wnyc.org/i/620/372/l/80/1/blackbox.jpeg" alt="">

                <input type="file" class="hidden" name="image" id="da_image">
                </div>
                
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                   <div class="form-group">
                    <label>Title</label>
                    <input type="text" class ="form-control" name="title">
                   </div>

                   <div class="form-group">
                    <label>Quote</label>
                    <textarea class="form-control" name="body" id="da_quote"></textarea>
                   </div>

                   <div class="form-group">
                    <label>Author</label>
                    <input type="text" class ="form-control" name="author" id="da_author">
                   </div>
                   <div class="hidden">
                    <input type="text" id="height" name="height">
                     <input type="text" id="width" name="width">
                   </div>

                   <input type="submit" value="Create" class="form-control btn btn-primary btn-block">
                </div>

            </div>
            </form>

        </div>
        <!-- /.row -->


       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('public/assets/js/jquery.js')}}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>

     <script src="{{asset('public/assets/js/post_da.js')}}"></script>
    

</body>

</html>
