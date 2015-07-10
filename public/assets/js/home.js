$(document).ready(function(){

	 //scroll trang
     $(window).scroll(function() {
        if($(window).scrollTop() + window.innerHeight  == ($(document).height())) {

            skip = $('.col-md-6.div_content_center').last().attr('skip');

            admin = $('#login_admin').val();
            get_new(skip, admin);



            //alert("bottom!");
        }
    });



     function get_new(skip, admin){


        $.get( "contents", {
            skip: skip

        } ).done(function( data ) {
            data2 = JSON.parse(data);

            if(data2['contents'].length == 0)
                $('#da_loading_ajax').hide();
            else{

                url = "http://"+window.location.host+'/';

                for(i=0; i< data2['contents'].length; i++){

                 var html ='';
                 html = '<div class="col-md-6 div_content_center" skip="'+data2['skip']+'">';
                 html +=' <h3>';
                 html +=' <a href="'+url+'post/'+data2['contents'][i]['slug']+'">'+data2['contents'][i]['title']+'</a>';

                 if(admin =="admin")
                    html+= '<a href="'+url+'del-post?slug='+data2['contents'][i]['slug']+'" class="btn btn-danger">Delete</a>';

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

             // quảng cáo google
             width = $( window ).width(); //get width device
             html2="";//html quảng cáo gg

             if(width > 768){// dành cho destop
                if(data2['contents'].length ==5)//ko đủ 5 thì không ra quảng cáo
                 html2+= '<div class="col-md-6 div_content_center da_google_ad4_destop" skip="'+data2['skip']+'"> <div class=""> <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- izquote-content-desktop --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4351575263209189" data-ad-slot="5123947953" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </div> </div>';

         }else{//dành cho mobile
            html2 +='<div class="col-md-6 div_content_center da_google_ad4_mobile" skip="'+data2['skip']+'"> <div class=""> <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- izquote-content-mobile --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4351575263209189" data-ad-slot="4984347150" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </div>';
        }

        $('.da_contents').find('.col-md-6').last().after(html2);

    }



});

}





//pop up collection

$('#list_collection').click(function(){

   $('#name_collection').val('');
})



function notify(){
    $(".pos-demo").notify(
      "I'm left of the box", 
      { position:"right" }
      );

}



$('#submit_collect').click(function(){

    dropdown_collect = $('#opt_collection').val();
    name = $('#name_collection').val();
    id = $('#id_post').val();

    //gui ajax

    $.get( "contents", {
            dropdown_collect: dropdown_collect,
            name :name,
            id:id

        } ).done(function( data ) {
            data2 = JSON.parse(data);
            
            notify();//hiển thị thông báo
        });

})

















})