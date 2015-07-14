@extends('layouts.master')
@section('title',"$name->name")


@section('content')
<!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$name->name}}
                <p class="da_back_collection"><a href="{{url('collect')}}" class=""><i class="fa fa-chevron-left"></i> Back to Collection</a></p>
                </h1>
                <!-- <small><a href="#" class="\">Delete</a></small> -->
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        	@if(count($list) >0)

        	@foreach($list as $key => $val)
            <div class="col-md-4 portfolio-item">
            	<div class="caption">
                <a onclick=" return confirm('Are you sure you want to delete?')"  href="{{url('collect/delete-post').'/'.$name->id.'/'.$val->id_post}}" class=""><i class="fa fa-trash-o"></i> Delete</a>

            	</div>
                <a href="{{url('post').'/'.$val->slug}}">
                    <img class="img-responsive" src="{{url($val->image)}}" alt="">
                </a>
                <h3>
                    <a href="{{url('post').'/'.$val->slug}}">@if(strlen($val->title) >=70){{substr($val->title,0,70).'...'}}
                        @else {{$val->title}} @endif</a>
                </h3>
            </div>

            @endforeach
            @endif
            
        </div>
        <!-- /.row -->

        

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>



   

@section('script')
<script type="text/javascript" src="{{asset('public/assets/js/jquery.resizecrop-1.0.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/resize_image.js')}}"></script>

@stop



@stop

