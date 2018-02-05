
jQuery(function($)
{
    $(".hamburger").click(function() {
        $(".navigation").toggleClass("open");
    });
    $(".active-lang").click(function(e) {
        $('.languages').toggleClass("show-lang");
        e.preventDefault();
    });
    $("#international-press").click(function(e) {
        //$('.press-languages').toggleClass("show-international");
        //$(this).children('.arrow').toggleClass("rotate-arrow");
        e.preventDefault();
    });

    // $('.i-container').children('.also-feature').each(function () {
    //   if ($(this).children('.also-desc').html().indexOf('br')) {
    //     $(this).hide();
    //     console.log('oculto');
    //   } else {
    //     console.log('mostrar');
    //   }
    // });

});

$(".menu-title").click(function(){
  $(this).siblings('.menu-ul').toggleClass('open-menu-mobile');
});

$(".normal").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
  $('.mobile-toggle').toggleClass('open');
  $(".elements").toggleClass('elements-show');
});

$(".mobile").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
  $('.mobile-toggle').toggleClass('open');
  $(".elements").toggleClass('elements-show');
});

$(".mobile-toggle").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
  $('.mobile-toggle').toggleClass('open');
  $(".elements").toggleClass('elements-show');
});

$("span.download").click(function(){
  $(".cartel").slideToggle();
});


 $(".search-bar").click(function() {

       if($(".dropdown-days.select2-dropdown--below").length) {

           $(".days-container").addClass('downwards');
           $(".search-bar").addClass('downwards');
       } else {
           $(".days-container").removeClass('downwards');
           $(".search-bar").removeClass('downwards');
       }
       if($(".dropdown-days.select2-dropdown--above").length) {

           $(".days-container").addClass('upwards');
           $(".search-bar").addClass('upwards');
       } else {
           $(".days-container").removeClass('upwards');
           $(".search-bar").removeClass('upwards');
       }
   });

   $(".search-bar").on("select2:selecting", function() {
           $('.days-container').removeClass('downwards');
           $('.days-container').removeClass('upwards');
   });


   $("#modal-exp").iziModal();
   $("#modal-success").iziModal();
