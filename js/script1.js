var h_hght = 75; // высота шапки
var h_mrg = 10;    // отступ когда шапка уже не видна
                 
$(function(){
 
    var elem = $('.header');
    var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);
    }           
     
    $(window).scroll(function(){
        top = $(this).scrollTop();
         
        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
        } else {
            elem.css('top', h_mrg);
        }
    });
 
});