
$("#modal-exp").iziModal();
$("#modal-success").iziModal();


$(".normal").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
  $(".elements").toggleClass('elements-show');
});

$(".mobile").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
  $(".elements").toggleClass('elements-show');
});

$(".mobile-toggle").click(function(){
  $(".elements").slideToggle(function() {
    if ($(this).is(':visible')) {
      $(this).css('display','flex');
      $(this).css('justify-content','center');
    }
  });
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
