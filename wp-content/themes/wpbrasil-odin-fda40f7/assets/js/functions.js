jQuery(document).ready(function($) {

  $(window).bind('scroll', function () {

    if ($(window).scrollTop() > 99) {
        $('.page-header').addClass('fixed');
    } else {
        $('.page-header').removeClass('fixed');
    }
  });

  $("#menu-menu-principal > li > a").click(function(){

    var url = $(this).attr('href').replace('/','');
    $('html, body').animate({
                        scrollTop: $("#"+url).offset().top -70
                    }, 500);
    return false;
  });
});
