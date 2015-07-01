$(document).ready(function(){

 $(".da_img_post").load(function() {


    height = $(this).height();
    height_div = $('.da_div_quote').height();
    $('#width').val($(this).width());
    $('#height').val(height);

    $('.da_div_quote').css('margin-top', (height-height_div)/2);
    $('.da_div_author').css('margin-top', ((height-height_div)/2) +height_div +50);

});



 $('.da_choose_file').click(function(){
    $('#da_image').click();
})


 function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var image  = new Image();


        reader.onload = function (e) {
           var _width;
           var _height =0;
           $('.da_img_post').attr('src', e.target.result);


           image.src    = e.target.result; 
           image.onload = function() {
            width = this.width;
            height = this.height;

            ti_le = parseFloat(width)/600;

            if(width >=600 && height >=315){

                _height = parseInt(height/ ti_le);

                $('#height').val(_height);






            }
            else{
                $('#da_image').val('');
                $('.da_img_post').attr('src','https://media2.wnyc.org/i/620/372/l/80/1/blackbox.jpeg');
                alert('Minimum Image width 600px , height 315px !', 'Notification');
            }
        };



    }

    reader.readAsDataURL(input.files[0]);

}
}

$("#da_image").change(function(){
    readURL(this);
});

$('#da_quote').keyup(function(){
    height = $('.da_img_post').height();
    height_div = $('.da_div_quote').height();

    $('.da_div_quote').css('margin-top', (height-height_div)/2);
    $('.da_div_author').css('margin-top', ((height-height_div)/2) +height_div +50);

    $('.da_div_quote').text($(this).val());


    
})

$('#da_author').keyup(function(){
    height = $('.da_img_post').height();
    height_div = $('.da_div_quote').height();

    $('.da_div_quote').css('margin-top', (height-height_div)/2);
    $('.da_div_author').css('margin-top', ((height-height_div)/2) +height_div +50);

    $('.da_div_author').text($(this).val());


    
})


$('#da_form_post').validate({
    rules: {
    // compound rule
    body: {
      required: true,
      minlength: 3
  },
  title: {
      required: true,
      minlength: 3
  }
}
})






})