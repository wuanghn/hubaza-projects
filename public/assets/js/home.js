$(document).ready(function(){

	 //scroll trang
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height()  == ($(document).height())) {
        	

            skip = $('.col-md-6.div_content_center').last().attr('skip');
            console.log(skip);

            get_new(skip);

            //alert("bottom!");
        }
    });



    function get_new(skip){


        $.get( "contents", {
            skip: skip

        } ).done(function( data ) {
            data2 = JSON.parse(data);

            for(i=0; i< data2['contents'].length; i++){

               var html ='';
               html = '<div class="col-md-6 div_content_center" skip="'+data2['skip']+'">';
               html +=' <h3>';
               html +=' <a href="#">'+data2['contents'][i]['title']+'</a>';
               html +=' </h3>';
               html +=' <p class="lead">';
               html +=' by <a href="index.php">'+data2['contents'][i]['id_user']+'</a>';
               html +=' </p>';
               html +=' <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>';
               html +='    <hr>';
               html +=' <img class="img-responsive" src="'+data2['contents'][i]['image']+'" alt="">';
               html +='<div class="da_fb_like">';
               html +=' <a class="btn btn-social btn-facebook">';
               html +=' <i class="fa fa-facebook"></i>Facebook</a>';

               html +=' <a class="btn btn-social btn-twitter">';
               html +='   <i class="fa fa-twitter"></i>Twitter</a>';

               html +='<input type="text" value="'+data2['contents'][i]['slug']+'" class="da_url">';
               html +='  </div>';
               html +=' </div>';

               $('.da_contents').find('.col-md-6').last().after(html);
           }


           console.log(data2["skip"]);
       });
}


//share FB


$(document).on('click', '.da_fb_like .btn-facebook', function(){
    var pathname = window.location.hostname;
    url = $(this).parent().find('input.da_url').val();

    full_url = pathname+'/'+url;
    
    share(full_url) ;
})

function share(url) {
  FB.ui({
    method: 'share',
    href: url,
  }, function(response){});
}





})