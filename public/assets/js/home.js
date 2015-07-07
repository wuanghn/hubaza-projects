$(document).ready(function(){

	 //scroll trang
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height()  == ($(document).height())) {
        	

            skip = $('.col-md-6.div_content_center').last().attr('skip');
            // console.log(skip);

            get_new(skip);

            //alert("bottom!");
        }
    });



    function get_new(skip){


        $.get( "contents", {
            skip: skip

        } ).done(function( data ) {
            data2 = JSON.parse(data);

            url = "http://"+window.location.host+'/';

            for(i=0; i< data2['contents'].length; i++){

               var html ='';
               html = '<div class="col-md-6 div_content_center" skip="'+data2['skip']+'">';
               html +=' <h3>';
               html +=' <a href="'+url+'post/'+data2['contents'][i]['slug']+'">'+data2['contents'][i]['title']+'</a>';
               html +=' </h3>';
               html +=' <p class="lead">';
               html +=' by <a href="index.php">'+data2['contents'][i]['fullname']+'</a>';
               html +=' </p>';
               html +=' <p><span class="glyphicon glyphicon-time"></span> Posted on '+data2['contents'][i]['created']+'</p>';
               html +='    <hr>';
               html +=' <img class="img-responsive" src="'+url +data2['contents'][i]['image']+'" alt="">';
               html +='<div class="da_fb_like">';
               html +=' <a class="btn btn-social btn-facebook" href="https://www.facebook.com/dialog/feed?app_id=828149473934812&display=popup&caption= '+data2['contents'][i]['title']+'&link='+url+'/post/'+data2['contents'][i]['slug']+'&redirect_uri='+url+'post/home">';

               html +=' <i class="fa fa-facebook"></i>Facebook</a>';

               html +=' <a class="btn btn-social btn-twitter" href="https://twitter.com/intent/tweet?url='+url+'post/'+data2['contents'][i]['slug']+'&text='+data2['contents'][i]['title']+'&count=none "data-size="large"">';
               html +='   <i class="fa fa-twitter"></i>Twitter</a>';

               html +='<input type="text" value="'+data2['contents'][i]['slug']+'" class="da_url hidden">';
               html +='  </div>';
               html +=' </div>';

               $('.da_contents').find('.col-md-6').last().after(html);
           }


           // console.log(data2["skip"]);
       });
}


//share FB













})