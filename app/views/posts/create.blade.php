@extends('layouts.master')


@section('content')

 <div class="row">

                <!-- Blog Entries Column -->
                <form action="{{url('store')}}" method="post" enctype="multipart/form-data" id="da_form_post" >

                    <div class="col-md-7 col-xs-offset-1 da_hidden_respon">
                        <div>
                            <div class="da_backgroup"></div>
                            <a class="da_choose_file" href="#">Change Background</a>
                        </div>
                        <div style="width: 600px">
                            <p class="da_div_quote">Text here</p>
                            <p class="da_div_author"></p>
                            <img  class="img-responsive da_img_post" src="http://i126.photobucket.com/albums/p89/robertthomas_2006/600x600.png?t=1241980077" alt="">


                        </div>



                    </div>

                    <!-- Blog Sidebar Widgets Column -->
                    <div class="col-md-4">

                        <!-- Blog Search Well -->
                        <div class="well">
                            <div class="form-group da_div_change_image">
                                <label>Change Background</label>
                                <input type="file" name="image" id="da_image">
                            </div>
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

                            <input type="submit" value="Create" class="form-control btn btn-primary btn-block" id="da_submit_post">
                        </div>

                    </div>
                </form>

            </div>


@stop



