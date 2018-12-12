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