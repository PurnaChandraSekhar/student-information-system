$(document).ready(function(){
//    SIDEBAR HIDE/SHOW
    $('.menu').click(function(e){
       $('.sidebar').show(300);
       $('.new_menu').show(300);
    });

//    hiding the side bar
   $('.new_menu').click(function () {
       $(this).css('display','none');
       $('.sidebar').hide(200);
   });


//   ADDING and REMOVING EXTRA INPUT FIELD FOR PROGRAMMES
    var add_programme_form=$('.add-programme-form');
    add_programme_form.on('click','.plus',function(){
       var container = $('.wrapper-box');
       var wrapper = $('.first');
       wrapper.clone().removeClass('first').appendTo(container).find('input').val("");
    });

    add_programme_form.on('click','.delete',function () {
        var count = $('.wrapper-box .form-wrapper').length;
        if(count>1) //if more than one fields exists then remove the last one
        {
            $('.wrapper-box .form-wrapper').last().remove();
        }
        else //Show a message
        {
            $('.icon span').text("You can't remove");
            setTimeout(function(){
                $('.icon span').fadeOut();
            },1000);
        }
    });
//    ends here

});