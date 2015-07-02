$(document).ready(function(){

	 //scroll trang
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
        	

            skip = $('.col-md-6.div_content_center').last().attr('skip');
            console.log(skip);

        get_new(skip);

            //alert("bottom!");
        }
    });



    function get_new(skip){
         var html ='';
        html = '<div class="col-md-6 div_content_center" skip="0">';

          html +='      <h1 class="page-header">';
            html +='         Page Heading';
            html +='         <small>Secondary Text</small>';
            html +='     </h1>';
            html +='    <h2>';
             html +='       <a href="#">Blog Post Title</a>';
            html +='    </h2>';
            html +='    <p class="lead">';
            html +='        by <a href="index.php">Start Bootstrap</a>';
            html +='    </p>';
            html +='    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>';
            html +='    <hr>';
            html +='    <img class="img-responsive" src="http://placehold.it/900x300" alt="">';
            html +='    <hr>';
            html +='    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>';
            html +='    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>';

             html +='   <hr>';

            html +='</div>';

$('.da_contents').find('.col-md-6').last().after(html);

        // $.get( "get-new-ajax", {
        //     skip: skip

        // } ).done(function( data ) {
        //     data2 = JSON.parse(data);

        //     for(i=0; i< data2['news'].length; i++){

        //         html = "";
        //         html += '<div class="col-md-6" skip="'+data2["skip"]+'">';
        //         html += '<p>'+data2['news'][i]['id']+'</p>';
        //         html += '<p>'+data2['news'][i]['name']+'</p>';
        //         html += '<img src="'+data2['news'][i]['avatar']+'">';
        //         html += '<p>'+data2['news'][i]['status']+'</p>';
        //         html += '</div>';

        //         $('.da_contents').find('.col-md-6').last().after(html);
        //     }


        //     console.log(data2["skip"]);
        //     });
    }
})