var ams=function(){var a=window.location.hostname,e=this;this.init=function(){},this.eventSelectTemplate=function(){$(".custom-select").on("change",function(e){var s=$("#"+e.target.id).val(),i=$(e.target).parent().parent().parent().parent().find(".fr-wrapper").find(".fr-element");if("mini evento"==s)if("localhost"==a)var t='<div id="header-event-fr" class="plantillaMiniEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p><span class="download">Ver cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div><p class="mock-insert"><br></p><!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';else var t='<div id="header-event-fr" class="plantillaMiniEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div><p class="mock-insert"><br></p><!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';else if("maxi evento"==s)if("localhost"==a)var t='<!-- HEADER --> <div id="header-event-fr" class="plantillaMaxiEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div><p class="mock-insert"><br></p> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 2</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 3</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> <!-- VIDEO YOUTUBE <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --></div> </div><p class="mock-insert"><br></p> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 4</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p><span class="download">Ver cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';else var t='<!-- HEADER --> <div id="header-event-fr" class="plantillaMaxiEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div><p class="mock-insert"><br></p> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 2</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 3</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> <!-- VIDEO YOUTUBE <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --></div> </div><p class="mock-insert"><br></p> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 4</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';"<p><br></p>"!=i.html()&&"<p></p>"!=i.html()&&""!=i.html()||$(i).html(t)})},this.multilingualGetWysiwygElements=function(a){var e=$(a.target),s=e[0].dataset.switchLocale,i,t;"es"!=s&&void 0!==i&&null!==i||(t=$(a.target).parent().parent().parent().parent().parent().parent(),i=$(t).find("textarea").prev().find(".fr-wrapper").html());var l=$(t).find("textarea").prev().find(".fr-wrapper").find(".fr-element");return l.length<1&&(i=$(a.target).parent().parent().parent().parent().parent().find('textarea[name="markup"]').text(),l=$(t).children().children().children().prev().find(".fr-wrapper").find(".fr-element")),[i,l]},this.multilingualInsertTemplate=function(a,e){"<p><br></p>"!=e.html()&&"<p></p>"!=e.html()&&""!=e.html()||e.html(a)},this.pasteHtmlAtCaret=function(a){var e,s;if(window.getSelection){if(e=window.getSelection(),e.getRangeAt&&e.rangeCount){s=e.getRangeAt(0),s.deleteContents();var i=document.createElement("div");i.innerHTML=a;for(var t=document.createDocumentFragment(),l,c;l=i.firstChild;)c=t.appendChild(l);s.insertNode(t),c&&(s=s.cloneRange(),s.setStartAfter(c),s.collapse(!0),e.removeAllRanges(),e.addRange(s))}}else document.selection&&"Control"!=document.selection.type&&document.selection.createRange().pasteHTML(a)},this.createButtonsWysiwyg=function(a){var s=$(a)[0].id,i=$("#"+s),t=i.find(".fr-toolbar"),l=i.find(".fr-element");(i.find(".plantillaMunicipios").length>0||i.find(".plantillaMunicipio").length>0||i.find(".plantillaComarcas").length>0||i.find(".plantillaComarca").length>0||i.find(".plantillaPlayas").length>0||i.find(".plantillaPlaya").length>0||i.find(".plantillaRuta").length>0||i.find(".plantillaEvento").length>0||i.find(".plantillaExperiencia").length>0)&&(t.append('- <span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Título + descripción" class="btwtitleDesc custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/parrafo.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Sección destacada" class="btwdestacado custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Imagen" class="btwfullImage custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Galería 3" class="btwthreeImages custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/galeriatres.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Galería 2" class="btwtwoImages custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/galeriados.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Info" class="btwmoreInfo custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/masinfo.svg"/></span>'),t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Ubicación" class="btwlocations custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/ubicacion.svg"/></span>')),(i.find(".plantillaRuta").length>0||i.find(".plantillaMiniEvento").length>0||i.find(".plantillaMaxiEvento").length>0||i.find(".plantillaExperiencia").length>0)&&t.append('<span data-toggle="tooltip" data-placement="bottom" data-delay="200" title="Enumeración" class="btwnumberSection custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/parrafonumerado.svg"/></span>'),$(".btwtitleDesc").on("click",function(){e.pasteHtmlAtCaret('<div class="section-txt-village"><div class="txt-container"><h3 class="title">TITULAR</h3><img class="separator fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"><p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p></div></div>'),console.log(l),console.log(i.find("textarea"))}),$(".btwdestacado").on("click",function(){e.pasteHtmlAtCaret('<div class="img-village"><div class="txt-container"><p class="title">Título del destacado</p><p class="desc">Puedes destacar una ruta, una playa o un evento. Escribe una breve descripción sobre el enlace que vas a sugerir.</p><a class="events-link" href="rutas.html">Conocer <img src="/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a><img class="separator fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div><img class="img-destacada" src="/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt=""></div>')}),$(".btwfullImage").on("click",function(){e.pasteHtmlAtCaret('<div class="section-img"><img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""></div>')}),$(".btwthreeImages").on("click",function(){e.pasteHtmlAtCaret('<div class="all-exps"><div class="all-events-container"><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/atun.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/faro.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/brena.jpg"></div></div></div>')}),$(".btwtwoImages").on("click",function(){e.pasteHtmlAtCaret('<div class="all-events"><div class="all-events-container"><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/barbate1.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/shutterstock_398451547.jpg"></div></div></div>')}),$(".btwnumberSection").on("click",function(){e.pasteHtmlAtCaret('<div class="section-txt"><div class="big-number-container"><span class="step">1</span></div><div class="txt-container"><p class="title">TITULAR 1</p><p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p></div></div>')}),$(".btwmoreInfo").on("click",function(){e.pasteHtmlAtCaret('<div class="section-txt"><div class="txt-container"><h3>¿más info?</h3><img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/big-yellow-separator.svg" class="fr-fic fr-dii"><p><a href="#" rel="noopener noreferrer" target="_blank">Enlace 1</a></p><p><a href="#" rel="noopener noreferrer" target="_blank">Enlace 2</a></p></div></div>')}),$(".btwlocations").on("click",function(){e.pasteHtmlAtCaret('<div class="municipios-snippet"><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 1</p></a></div><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 2</p></a></div><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 3</p></a></div></div>')})},this.createButtonReloadTemplateWysiwyg=function(a){var s=$(a)[0].id;$("#"+s).find(".fr-toolbar").append('- <span class="custom-wysiwyg reloadTemplate"> <img class="reloadTemplateImage" src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>'),$(".reloadTemplate").on("click",function(a){e.reloadTemplate(a)})},this.reloadTemplate=function(a){var e=$(a.target).parent().parent().parent().find(".fr-wrapper").find(".fr-element");console.log(e),e.html("hola")}};