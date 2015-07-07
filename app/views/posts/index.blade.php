@extends('layouts.master')


@section('content')

<div class="row da_contents">

        <!-- Blog Entries Column -->
        <div class="col-md-3 hidden">
           <!-- Blog Categories Well -->
           <div class="well">
            <input type="text" class="btn btn-primary btn-block" value="Create a Post">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>

    </div>

    @foreach($content as $key => $val)
    <div class="col-md-6 div_content_center" skip="0">

        <!-- First Blog Post -->
        <h3>
            <a href="{{asset('posts/'.$val->slug)}}">{{$val->title}}</a>
        </h3>
        <p class="lead">
            by <a href="index.php">{{$val->fullname}}</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$val->created}}</p>
        <hr>
        <img class="img-responsive" src="{{$val->image}}" alt="">


        <div class="da_fb_like">
            <a class="btn btn-social btn-facebook popup" 

              href="https://www.facebook.com/dialog/feed?
                app_id=828149473934812
                &display=popup&caption= {{$val->title}}
                &link={{url('posts')}}/{{$val->slug}}
                &redirect_uri=http://news.zing.vn/"

            >
              <i class="fa fa-facebook"></i>Facebook</a>

              <a class="btn btn-social btn-twitter">
                  <i class="fa fa-twitter"></i>Twitter</a>

                  <input type="text" value="{{$val->slug}}" class="da_url hidden"> 
              </div>


          </div>

          @endforeach



          <!-- Blog Sidebar Widgets Column -->
          <div class="col-md-3 hidden">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>



            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>
            <div class="well">
                <p>Copyright &copy; Your Website 2015</p>
            </div>

        </div>

    </div>
    <!-- /.row -->










 





@stop
<!-- <body style="background-color:#F4F4F4"> </body> -->


