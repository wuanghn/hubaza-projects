@extends('layouts.master')


@section('content')
<!-- Page Header -->
<!-- <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Page Heading
            <small>Secondary Text</small>
        </h1>
    </div>
</div> -->
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    @foreach($posts as $post)
        <?php
            $post->url_page = url('post/'.$post->slug);
            $post->url_image = asset('public/'.$post->image);
        ?>
        <div class="col-md-4 portfolio-item">
            <a href="{{$post->url_page}}">
                <img class="img-responsive" src="{{$post->url_image}}" alt="">
            </a>
            <h3>
                <a href="{{$post->url_page}}">{{$post->title}}</a>
            </h3>
            <a href="{{url('del-post-from-profile')}}?slug={{$post->slug}}" class="btn btn-block btn-danger">Delete</a>
        </div>

    @endforeach
</div>
<!-- /.row -->
@stop