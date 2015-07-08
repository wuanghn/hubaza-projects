$(document).ready(function(){

	 //scroll trang
    $(window).scroll(function() {
        if($(window).scrollTop() + window.innerHeight  == ($(document).height())) {
        	
            $('#da_loading_ajax').show();

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
               html +=' <a href="'+url+'post/'+data2['contents'][i]['slug']+'"><img class="img-responsive" src="'+url+'public/' +data2['contents'][i]['image']+'" alt=""></a>';
               html +='<div class="da_fb_like">';
               html +=' <a class="btn btn-social btn-facebook" href="https://www.facebook.com/dialog/feed?app_id=828149473934812&link='+url+'post/'+data2['contents'][i]['slug']+'&redirect_uri=http://izquote.com">';

               html +=' <i class="fa fa-facebook"></i>Facebook</a>';

               html +=' <a class="btn btn-social btn-twitter" href="https://twitter.com/intent/tweet?url='+url+'post/'+data2['contents'][i]['slug']+'&text='+data2['contents'][i]['title']+'&count=none "data-size="large"">';
               html +='   <i class="fa fa-twitter"></i>Twitter</a>';

               html +='<input type="text" value="'+data2['contents'][i]['slug']+'" class="da_url hidden">';
               html +='<div class="fb-share-button" data-href="'+url+'post/'+data2['contents'][i]['slug']+'" data-layout="button_count"></div>';
               html +='  </div>';
               html +=' </div>';

               $('.da_contents').find('.col-md-6').last().after(html);
                FB.XFBML.parse();
           }
           


            $('#da_loading_ajax').hide();
       });
}


//share FB


count_share("http://mp3.zing.vn/album/Em-La-Cua-Anh-Ho-Viet-Trung-Ho-Quang-Hieu/ZWZBBEAB.html?st=5");

function count_share(URL){

    
    $.getJSON( 'http://graph.facebook.com/?id=' + URL, function( fbdata ) {
        get_share(fbdata.shares);

    });
   


}


function get_share(count){
   share = count;
   console.log(share);
}













})