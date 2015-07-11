$(document).ready(function(){

//pop up collection

$('#list_collection').click(function(){

   $('#name_collection').val('');
})



function notify(){
    $(".pos-demo").notify(
      "I'm left of the box", 
      { position:"right",className:'success'}
      );

}


notify();
$('#submit_collect').click(function(){

    dropdown_collect = $('#opt_collection').val();
    name = $('#name_collection').val();
    id = $('#id_post').val();

    //gui ajax

    // $.get( "contents", {
    //         dropdown_collect: dropdown_collect,
    //         name :name,
    //         id:id

    //     } ).done(function( data ) {
    //         data2 = JSON.parse(data);
            
    //         // notify();//hiển thị thông báo
    //     });

})
	
})