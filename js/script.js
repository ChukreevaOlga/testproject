$(document).ready(function() { 
    $(".catalog__item:eq(2)").addClass('disabled');
    $('.catalog__item').click(function(){
        $(this).toggleClass('active');
    });



});
                  
    

