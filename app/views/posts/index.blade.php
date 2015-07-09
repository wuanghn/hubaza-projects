@extends('layouts.master')

@section('title','Izquote.com')

@section('content')

<div class="row da_contents">



    @foreach($content as $key => $val)
    <div class="col-md-6 div_content_center" skip="0">

        <!-- First Blog Post -->
        <h3>
            <a href="{{asset('post/'.$val->slug)}}">{{$val->title}}</a>
            @if(Session::has('info_user') && Session::get('info_user')->email=='kelvin.timsach@gmail.com')

              <a href="{{url('del-post')}}?slug={{$val->slug}}" class="btn btn-danger">Delete</a>

            @endif
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


