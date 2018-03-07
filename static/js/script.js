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
});