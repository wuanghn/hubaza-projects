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
            <a href="{{asset('post/'.$val->slug)}}">{{$val->title}}</a>
        </h3>
        <p class="lead">
            by <a>{{$val->fullname}}</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$val->created}}</p>
        <hr>
        <a href="{{asset('post/'.$val->slug)}}"><img class="img-responsive" src="{{url('public/'.$val->image)}}" alt=""></a>


        <div class="da_fb_like">
            <a class="btn btn-social btn-facebook popup" href="https://www.facebook.com/dialog/feed?app_id=828149473934812&link={{url('post')}}/{{$val->slug}}&redirect_uri=http://izquote.com">

              <i class="fa fa-facebook"></i>Facebook</a>



              <a class="btn btn-social btn-twitter " href="https://twitter.com/intent/tweet?url={{url('post').'/'.$val->slug}}&text={{$val->title}}&count=none "data-size="large">
                  <i class="fa fa-twitter"></i>Twitter</a>

               <div class="fb-share-button" data-href="{{asset('post/'.$val->slug)}}" data-layout="button_count"></div>

                  <input type="text" value="{{$val->slug}}" class="da_url hidden"> 
              </div>


          </div>

          @endforeach

          <div><p id="da_loading_ajax">Loading <img src="{{url('public/ajax-loader.gif')}}"></p></div>



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



<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>





 





@stop


