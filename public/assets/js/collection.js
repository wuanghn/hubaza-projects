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


$('#submit_collect').click(function()
{

    dropdown_collect = $('#opt_collection').val();
    name = $('#name_collection').val();
    id = $('#id_post').val();

    //echo = dropdown_collect+"--"+name+"--"+id;

    //gui ajax

    $.post( "/izquote/collect/store", {
            dropdown_collect: dropdown_collect,
            name :name,
            id:id

        } ).done(function( data ) 
        {
            if(data == "done")
            {
                notify();
            }
            
            // notify();//hiển thị thông báo
        });

})
	
})