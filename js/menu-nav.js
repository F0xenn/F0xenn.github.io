(function($){

  $('.header__icon').click(function(e){
    e.preventDefault();
    $('.menu').toggleClass('active_menu');
    $('header').toggleClass('active_header');
  })

})(jQuery)
