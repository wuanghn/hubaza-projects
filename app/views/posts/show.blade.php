@extends('layouts.master')

@section('title',$post->title)

@section('content')

<div class="row">

	<div class="col-md-8 col-sm-6">
		<div class="da_google_ad2_mobile">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- izquote-sidebar-mobile -->
			<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-4351575263209189"
			data-ad-slot="3647214757"
			data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

		</div>
		<h1 class="page-header">
			{{$post->title}}
			<input type="hidden" value="{{$post->id}}" id="id_post">
		</h1>

		<div>
			<span style="float:right">{{$post->created}}</span>
			<!-- <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div> -->
			<div class="fb-share-button" data-href="{{$post->url_page}}" data-layout="button_count"></div>
			@if(Session::has('info_user'))
        <div class="da_add_collection">
  				<a class="btn btn-success pos-demo" data-toggle="modal" data-target="#myModal2">Add to Collection</a>
  			</div>
      @endif

		</div>

		<div style="text-align:center" class="da_img_content">
			<hr/>
			{{ HTML::image($post->url_image, $post->title) }}
			<!-- <img src="https://files.slack.com/files-pri/T044LQGTU-F075P5CHE/11427268.jpg" alt=""> -->
		</div>
		<hr>
		<!-- Buttons start here. Copy this ul to your document. -->
		<ul class="rrssb-buttons">

			<li class="rrssb-facebook">
 	         	                  <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
 	         	                  https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
 	         	                  <a href="https://www.facebook.com/dialog/feed?
 	         	                  app_id=828149473934812
 	         	                  &display=popup
 	         	                  &display=popup&caption= izquote.com
 	         	                  &link={{$post->url_page}}
 	         	                  &redirect_uri={{url()}}">
 	         	                  <span class="rrssb-icon">
 	         	                  	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="29" height="29" viewBox="0 0 29 29">
 	         	                  		<path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"
 	         	                  		class="cls-2" fill-rule="evenodd" />
 	         	                  	</svg>
 	         	                  </span>
 	         	                  <span class="rrssb-text">facebook</span>
 	         	              </a>
 	         	          </li>

 	         	          <li class="rrssb-twitter">
 	         	          	<!-- Replace href with your Meta and URL information  -->
 	         	          	<a href="https://twitter.com/intent/tweet?text={{$post->url_page}}?type=1&theater"
 	         	          		class="popup">
 	         	          		<span class="rrssb-icon">
 	         	          			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
 	         	          				<path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62c-3.122.162-6.22-.646-8.86-2.32 2.702.18 5.375-.648 7.507-2.32-2.072-.248-3.818-1.662-4.49-3.64.802.13 1.62.077 2.4-.154-2.482-.466-4.312-2.586-4.412-5.11.688.276 1.426.408 2.168.387-2.135-1.65-2.73-4.62-1.394-6.965C5.574 7.816 9.54 9.84 13.802 10.07c-.842-2.738.694-5.64 3.434-6.48 2.018-.624 4.212.043 5.546 1.682 1.186-.213 2.318-.662 3.33-1.317-.386 1.256-1.248 2.312-2.4 2.942 1.048-.106 2.07-.394 3.02-.85-.458 1.182-1.343 2.15-2.48 2.71z"
 	         	          				/>
 	         	          			</svg>
 	         	          		</span>
 	         	          		<span class="rrssb-text">twitter</span>
 	         	          	</a>
 	         	          </li>

 	         	          <li class="rrssb-googleplus">
 	         	          	<!-- Replace href with your meta and URL information.  -->
 	         	          	<a href="https://plus.google.com/share?url=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are%20{{$post->url_page}}?type=1&theater" class="popup">
 	         	          		<span class="rrssb-icon">
 	         	          			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
 	         	          				<path d="M14.703 15.854l-1.22-.948c-.37-.308-.88-.715-.88-1.46 0-.747.51-1.222.95-1.662 1.42-1.12 2.84-2.31 2.84-4.817 0-2.58-1.62-3.937-2.4-4.58h2.098l2.203-1.384h-6.67c-1.83 0-4.467.433-6.398 2.027C3.768 4.287 3.06 6.018 3.06 7.576c0 2.634 2.02 5.328 5.603 5.328.34 0 .71-.033 1.083-.068-.167.408-.336.748-.336 1.324 0 1.04.55 1.685 1.01 2.297-1.523.104-4.37.273-6.466 1.562-1.998 1.187-2.605 2.915-2.605 4.136 0 2.512 2.357 4.84 7.288 4.84 5.822 0 8.904-3.223 8.904-6.41.008-2.327-1.36-3.49-2.83-4.73h-.01zM10.27 11.95c-2.913 0-4.232-3.764-4.232-6.036 0-.884.168-1.797.744-2.51.543-.68 1.49-1.12 2.372-1.12 2.807 0 4.256 3.797 4.256 6.24 0 .613-.067 1.695-.845 2.48-.537.55-1.438.947-2.295.95v-.003zm.032 13.66c-3.62 0-5.957-1.733-5.957-4.143 0-2.408 2.165-3.223 2.91-3.492 1.422-.48 3.25-.545 3.556-.545.34 0 .52 0 .767.034 2.574 1.838 3.706 2.757 3.706 4.48-.002 2.072-1.736 3.664-4.982 3.648l.002.017zM23.254 11.89V8.52H21.57v3.37H18.2v1.714h3.367v3.4h1.684v-3.4h3.4V11.89"
 	         	          				/>
 	         	          			</svg>
 	         	          		</span>
 	         	          		<span class="rrssb-text">google+</span>
 	         	          	</a>
 	         	          </li>

 	         	      </ul>
 	         	      <!-- Buttons end here -->



 	         	      <div class="da_google_ad2_destop">
 	         	      	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 	         	      	<!-- izquote-sidebar-desktop -->
 	         	      	<ins class="adsbygoogle"
 	         	      	style="display:block"
 	         	      	data-ad-client="ca-pub-4351575263209189"
 	         	      	data-ad-slot="9693748353"
 	         	      	data-ad-format="auto"></ins>
 	         	      	<script>
 	         	      	(adsbygoogle = window.adsbygoogle || []).push({});
 	         	      	</script>

 	         	      </div>
 	         	      

                  <div><p class="da_comment">Comments<p></div>
 	         	      <div class="fb-comments" data-width="100%" data-href="{{$post->url_page}}" data-numposts="1"></div>



 	         	  </div>

 	         	  <!-- Blog Sidebar Widgets Column -->
 	         	  <div class="col-md-4 col-sm-6 sidebar_right">
 	         	  	<div class="da_google_ad_destop">
 	         	  		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 	         	  		<!-- izquote-newsfeed-desktop -->
 	         	  		<ins class="adsbygoogle"
 	         	  		style="display:block"
 	         	  		data-ad-client="ca-pub-4351575263209189"
 	         	  		data-ad-slot="9414546756"
 	         	  		data-ad-format="auto"></ins>
 	         	  		<script>
 	         	  		(adsbygoogle = window.adsbygoogle || []).push({});
 	         	  		</script>

 	         	  	</div>

 	         	  	<!-- moblie -->

 	         	  	<div class="da_google_ad_mobile">
 	         	  		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 	         	  		<!-- izquote-newsfeed-mobile -->
 	         	  		<ins class="adsbygoogle"
 	         	  		style="display:block"
 	         	  		data-ad-client="ca-pub-4351575263209189"
 	         	  		data-ad-slot="1891279951"
 	         	  		data-ad-format="auto"></ins>
 	         	  		<script>
 	         	  		(adsbygoogle = window.adsbygoogle || []).push({});
 	         	  		</script>
 	         	  	</div>




 	         	  	@foreach($post_new as $posts)
 	         	  	<a href="{{url('post/'.$posts->slug)}}">
 	         	  		<h4>{{$posts->title}}</h4>
 	         	  		<img style="width:100%" src="{{url('public')}}/{{$posts->image}}">
 	         	  	</a>
 	         	  	<hr>
 	         	  	@endforeach
 	         	  </div>

 	         	</div>



 	         	<!-- Button trigger modal -->

<!-- Modal -->
<form method="post" action="#">
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Collection</h4>
        </div>
        <div class="modal-body">
          <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active" id="list_collection"><a href="#your_collection" aria-controls="your_collection" role="tab" data-toggle="tab">List your collection</a></li>
              <li role="presentation"><a href="#add_collection" aria-controls="add_collection" role="tab" data-toggle="tab">Add new collection</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="your_collection">
               <select class="form-control" style="margin-top:30px" id="opt_collection">
                <option value="0">Default</option>
                @foreach($collects as $collect)
                  <option value="{{$collect->id}}">{{$collect->name}}</option>
                @endforeach
              </select>
            </div>

            <div role="tabpanel" class="tab-pane" id="add_collection">
             <div class="form-group" style="margin-top:30px">
              <label>Name Collection</label>
              <input type="text" class="form-control" name="name_collection" id="name_collection">
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_collect">Submit</button>
    </div>
  </div>
</div>
</div>
<form>

@section('script')
<script src="{{asset('public/assets/js/collection.js')}}"></script>
@stop


 	         	<!-- /.row -->
 	         	@stop