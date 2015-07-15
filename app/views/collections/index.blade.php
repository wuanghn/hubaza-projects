@extends('layouts.master')
@section('title',Session::get('info_user')->fullname."'s collection")


@section('content')
<!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bộ sưu tập
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @if(count($collection) ==0)
            <p>Collection is empty !</p>

            @else

            @foreach($collection as $key => $val)
            <div class="col-md-4 portfolio-item">
                <div class="caption">
                    <a onclick=" return confirm('Are you sure you want to delete?')" href="{{url('collect/delete-collection').'/'.$val->id}}" class=""><i class="fa fa-trash-o"></i> Delete</a>
           
                </div>
                <a href="{{url('collect/detail').'/'.$val->id}}">
                    <img class="img-responsive" src="{{asset('public/'.$val->image)}}" alt="">
                </a>

                <h4>
                    <a href="{{url('collect/detail').'/'.$val->id}}">@if(strlen($val->name) >=70){{substr($val->name,0,70).'...'}}
                        @else {{$val->name}} @endif
                    </a>
                </h4>
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


 



