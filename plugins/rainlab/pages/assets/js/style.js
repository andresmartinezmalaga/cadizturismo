
jQuery(function($)
{
    $(".send-info:not(:has(.button-send-info>a))").css('display','none');
    $("br").css('display','none');

    $(".hamburger").click(function() {
        $(".navigation").toggleClass("open");
    });
    $(".active-lang").click(function(e) {
        $('.languages').toggleClass("show-lang");
        e.preventDefault();
    });
    $("#international-press").click(function(e) {
        e.preventDefault();
    });
});

$(".menu-title").click(function(){
  $(this).siblings('.menu-ul').toggleClass('open-menu-mobile');
});


$("#bscEmpresa").click(function(){
  $('html, body').animate({
        scrollTop: $(".search-title-container").offset().top
    }, 2000);
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
           $(".search-bar").removeClass('upwards');
           $(".search-bar").removeClass('downwards');
   });

   $("#modal-exp").iziModal();
   $("#modal-success").iziModal();
   $("#modal-pub").iziModal();

  // Click Donwload Publication
  $(".download-link-pub").click(function(e){
      e.preventDefault();
      var datapub = $(e.target).attr('href').split("-#@-");
      // Url
      var purlpub =  datapub[0].split('.');
      var posExt = purlpub.length-1;      
      var urlpubExt = datapub[0].split('.')[posExt];
      var urlpub =  datapub[0].split('.'+urlpubExt)[0];
      // Langs
      var ilangspub = datapub[1].split(',');
      var plangspub = datapub[1];
      var langspub = plangspub.replace(/Á'/g, 'A');
      var langspub = langspub.replace(/Á/g, 'A');
      var langspub = langspub.replace(/É/g, 'E');
      var langspub = langspub.replace(/Í/g, 'I');
      var langspub = langspub.replace(/Ó/g, 'O');
      var langspub = langspub.replace(/Ú/g, 'U');
      var langspub = langspub.replace(/Ñ/g, 'N');
      var flangspub = langspub.split(',');
      // Final Url
      var urlpub = urlpub+'-'+flangspub[0].toString().toLowerCase()+'.'+urlpubExt;
      $("#slctoptpub").html("");  
      // Create Options
      for (var i = 0; i < flangspub.length; i++) {             
          elementspn = $("#slctoptpub").append("<span class='optmsl' value='"+flangspub[i].toString().toLowerCase()+"'>"+ilangspub[i]+"</span>");         
          $(elementspn).on('click', function(e) {            
            slcopt(e);
          })     
      }      
      // Insert Final Url At Hiden Html     
      $("#urlpubh").html(urlpub);
      $("#aPubHref").attr('href',urlpub);      
      // Open Modal
      $("#modal-pub").show(); 
  })

  // Change Donwload Lang Publication 
  function slcopt(e) { 
      var htmlurlpub = $("#urlpubh").html();
      var preurlpub = htmlurlpub.split('-');
      var posPreExt1 = preurlpub.length-1; 
      var preExt1 = preurlpub[posPreExt1];
      var surlpub = htmlurlpub.split('-'+preExt1)[0];
      var urlpubExt = preExt1.split('.')[1];
      var urlpub = surlpub+'-'+$(e.target).attr('value')+'.'+urlpubExt; 
      $("#urlpubh").html(urlpub); 
      $("#aPubHref").attr('href',urlpub); 
      $("#slctoptpub").hide(); 
      $("#langPub").html($(e.target).html()+"<img id='pubarr' src='http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/pubarrd.svg'>");
  };

  // Close Publication Modal
  $("#close-modal-pub").click(function(e){   
      $("#modal-pub").hide();
      $("#slctoptpub").hide();
      $("#langPub").html("Selecciona un idioma <img id='pubarr' src='http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/pubarrd.svg'>");
  })

  // Click On Select
  $("#langPub").click(function(e){    
     if($('#slctoptpub').is(':hidden')){
      $("#slctoptpub").show();
      $("#pubarr").attr('src','http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/pubarru.svg');
    } else {
      $("#slctoptpub").hide();
      $("#pubarr").attr('src','http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/pubarrd.svg');
    }
  })
