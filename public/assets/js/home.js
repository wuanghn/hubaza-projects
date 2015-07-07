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

            for(i=0; i< data2['contents'].length; i++){

               var html ='';
               html = '<div class="col-md-6 div_content_center" skip="'+data2['skip']+'">';
               html +=' <h3>';
               html +=' <a href="post/'+data2['contents'][i]['slug']+'">'+data2['contents'][i]['title']+'</a>';
               html +=' </h3>';
               html +=' <p class="lead">';
               html +=' by <a href="index.php">'+data2['contents'][i]['fullname']+'</a>';
               html +=' </p>';
               html +=' <p><span class="glyphicon glyphicon-time"></span> Posted on '+data2['contents'][i]['created']+'</p>';
               html +='    <hr>';
               html +=' <img class="img-responsive" src="'+data2['contents'][i]['image']+'" alt="">';
               html +='<div class="da_fb_like">';
               html +=' <a class="btn btn-social btn-facebook">';
               html +=' <i class="fa fa-facebook"></i>Facebook</a>';

               html +=' <a class="btn btn-social btn-twitter">';
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


$(document).on('click', '.da_fb_like .btn-facebook', function(){
    var pathname = window.location.hostname;
    url = $(this).parent().find('input.da_url').val();

    // full_url = 'http://'+pathname+'/'+url+'/';
    full_url = url;
    
    share(full_url) ;
})

function share(url) {
    FB.ui(
  {
    method: 'share',
    href: 'https://developers.facebook.com/docs/',
  },
  // callback
  function(response) {
    if (response && !response.error_code) {
      alert('Posting completed.');
    } else {
      alert('Error while posting.');
    }
  }
);





}




})