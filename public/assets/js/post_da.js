$(document).ready(function(){

 $(".da_img_post").load(function() {


    height = $(this).height();
  
    $('#width').val($(this).width());
    $('#height').val(height);

    position = vitri(height);

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

    position = vitri(height);

    $('.da_div_quote').text($(this).val());


    
})

$('#da_author').keyup(function(){
    height = $('.da_img_post').height();

    position = vitri(height);


    

    $('.da_div_author').text('- '+$(this).val()+' -');

    


    
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


function vitri(height){
  height_author = $('.da_div_author').height();
  height_div = $('.da_div_quote').height();

  if(height_author!= 0){
    height_author = height_author +72;
  }

  total = (height_author + height_div) / 2; //1 nưa của phần chữ

  position_body = (height/2) - total;
  position_author = (height/2) - total + height_div +72;

    $('.da_div_quote').css('margin-top', position_body);
    $('.da_div_author').css('margin-top', position_author);



}






})