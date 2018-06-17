$(document).ready(function() {
  
 $('.wrapper>.p_h2').not().hide();
 
  $('.wrapper>h2').click(function() {
    
    var findArticle = $(this).next();
    var findWrapper = $(this).closest('.wrapper');
    
    if (findArticle.is(':visible')) {
      findArticle.slideUp('fast');
    }
    else {
      findWrapper.find('>.p_h2').slideUp('fast');
      findArticle.slideDown('fast');
    }
  });
  
});


