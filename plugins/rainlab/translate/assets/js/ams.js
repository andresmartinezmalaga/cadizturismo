// Andrés Martinez : ams.js
var ams = function(){

	var serv = window.location.hostname;
    var self = this;

    this.init = function(){
    }

	// Enable insert events templates
    this.eventSelectTemplate = function(){

		var selectEventTemplate = $('.custom-select');

		selectEventTemplate.on('change', function(event){

            var valor = $('#'+event.target.id).val();
            var atextarea = $(event.target).parent().parent().parent().parent().find('.fr-wrapper').find('.fr-element');

            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            if( valor == 'mini evento') {

                if (serv == 'localhost'){
                    var tpmx = '<div id="header-event-fr" class="plantillaMiniEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p><span class="download">Ver cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div><p class="mock-insert"><br></p><!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';
                } else {
                    var tpmx = '<div id="header-event-fr" class="plantillaMiniEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div><p class="mock-insert"><br></p><!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';
                }

            } else if(valor == 'maxi evento') {

                if (serv == 'localhost'){
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="plantillaMaxiEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div><p class="mock-insert"><br></p> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 2</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 3</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> <!-- VIDEO YOUTUBE <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --></div> </div><p class="mock-insert"><br></p> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 4</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p><span class="download">Ver cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';
                } else {
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="plantillaMaxiEvento header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div><p class="mock-insert"><br></p> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 2</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 3</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> <!-- VIDEO YOUTUBE <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --></div> </div><p class="mock-insert"><br></p> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <p class="mock-insert"><br></p><div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 4</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <p class="mock-insert"><br></p><div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';
                }
            }

            if(atextarea.html()=='<p><br></p>' || atextarea.html()=='<p></p>' || atextarea.html()==''){
                $(atextarea).html(tpmx)
            }
        })

	}

	this.multilingualGetWysiwygElements = function(event){

		var boton = ($(event.target));
        var idioma = (boton[0].dataset.switchLocale);
        var padreTemplate;
        var padre;

        if( idioma == 'es' || padreTemplate  === undefined || padreTemplate === null){
            padre = ($(event.target).parent().parent().parent().parent().parent().parent());
            padreTemplate = ($(padre).find('textarea').prev().find('.fr-wrapper').html());
        }

        var hijoActual = ($(padre).find('textarea').prev().find('.fr-wrapper').find('.fr-element'));

        if(hijoActual.length<1){
            padreTemplate = $(event.target).parent().parent().parent().parent().parent().find('textarea[name="markup"]').text();
            hijoActual = ($(padre).children().children().children().prev().find('.fr-wrapper').find('.fr-element'));
        }

        return [padreTemplate,hijoActual];


	}

	this.multilingualInsertTemplate = function(padreTemplate, hijoActual){
		if(hijoActual.html()=='<p><br></p>' || hijoActual.html()=='<p></p>' || hijoActual.html()==''){
        	hijoActual.html(padreTemplate);
        }
	}

	this.pasteHtmlAtCaret = function(html) {

        //console.log('entra');
        var sel, range;

        if (window.getSelection) {
             //console.log('entra2');
            // IE9 and non-IE
            sel = window.getSelection();

            if (sel.getRangeAt && sel.rangeCount) {

                range = sel.getRangeAt(0);
                range.deleteContents();

                // Range.createContextualFragment() would be useful here but is
                // non-standard and not supported in all browsers (IE9, for one)
                var el = document.createElement("div");
                el.innerHTML = html;

                var frag = document.createDocumentFragment(), node, lastNode;

                while ( (node = el.firstChild) ) {
                    lastNode = frag.appendChild(node);
                }

                range.insertNode(frag);

                // Preserve the selection
                if (lastNode) {
                    
                    range = range.cloneRange();
                    range.setStartAfter(lastNode);
                    range.collapse(true);
                    sel.removeAllRanges();
                    sel.addRange(range);
                }
            }
        } else if (document.selection && document.selection.type != "Control") {
            // IE < 9
            document.selection.createRange().pasteHTML(html);
        }
    }

	/* RUTAS ICONOS:
			*** titleDesc: /storage/app/media/uploaded-files/templates/parrafo.svg
			*** destacado: /storage/app/media/uploaded-files/templates/destacado.svg
			*** threeImages: /storage/app/media/uploaded-files/templates/galeriatres.svg
			*** twoImages: /storage/app/media/uploaded-files/templates/galeriados.svg
			*** numberSection: /storage/app/media/uploaded-files/templates/parrafonumerado.svg
			*** moreInfo: /storage/app/media/uploaded-files/templates/masinfo.svg
			*** locations: /storage/app/media/uploaded-files/templates/ubicacion.svg
	 */

	/* SECCIONES */

	//Título + descripción
	var titleDesc = '<div class="section-txt-village"><div class="txt-container"><h3 class="title">TITULAR</h3><img class="separator fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"><p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p></div></div>';
	//Sección destacada
	var destacado = '<div class="img-village"><div class="txt-container"><p class="title">Título del destacado</p><p class="desc">Puedes destacar una ruta, una playa o un evento. Escribe una breve descripción sobre el enlace que vas a sugerir.</p><a class="events-link" href="rutas.html">Conocer <img src="/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a><img class="separator fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div><img class="img-destacada" src="/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt=""></div>';
	//Imagen al 100%
	var fullImage = '<div class="section-img"><img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""></div>';
	//Galería de 3 imágenes
	var threeImages = '<div class="all-exps"><div class="all-events-container"><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/atun.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/faro.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/brena.jpg"></div></div></div>';
	//Galería de 2 imágenes
	var twoImages = '<div class="all-events"><div class="all-events-container"><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/templates/barbate1.jpg"></div><div class="event"><div class="overlay-img"><br></div><img class="rec-img fr-fic fr-dii" src="/storage/app/media/uploaded-files/shutterstock_398451547.jpg"></div></div></div>';
	//Enumeración
	var numberSection = '<div class="section-txt"><div class="big-number-container"><span class="step">1</span></div><div class="txt-container"><p class="title">TITULAR 1</p><p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p></div></div>';
	//Más info
	var moreInfo = '<div class="section-txt"><div class="txt-container"><h3>¿más info?</h3><img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/big-yellow-separator.svg" class="fr-fic fr-dii"><p><a href="#" rel="noopener noreferrer" target="_blank">Enlace 1</a></p><p><a href="#" rel="noopener noreferrer" target="_blank">Enlace 2</a></p></div></div>';
	//Ubicaciones
	var locations = '<div class="section-txt"><div class="txt-container"><div class="municipios"><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 1</p></a></div><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 2</p></a></div><div class="municipio"><img src="/storage/app/media/uploaded-files/templates/location-municipio.svg" class="fr-fil fr-dib"><a href="#" target="_blank"><p class="municipio-txt">Ubicación 3</p></a></div></div></div></div>';

    this.createButtonsWysiwyg = function(element){
       
        var ptid = $(element)[0].id;
        var pt = $('#'+ptid);
        var toolbar = pt.find('.fr-toolbar');
        var frElement = pt.find('.fr-element');
        
        if ( pt.find('.plantillaMunicipios').length > 0 ||
             pt.find('.plantillaMunicipio').length > 0 ||
             pt.find('.plantillaComarcas').length > 0 ||
             pt.find('.plantillaComarca').length > 0 ||
             pt.find('.plantillaPlayas').length > 0 ||
             pt.find('.plantillaPlaya').length > 0 ||
             pt.find('.plantillaRuta').length > 0 ||
             pt.find('.plantillaEvento').length > 0 ||
             pt.find('.plantillaExperiencia').length > 0) {
            
             toolbar.append('- <span class="btwtitleDesc custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/parrafo.svg"/></span>');
             toolbar.append('<span class="btwdestacado custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>');
             toolbar.append('<span class="btwfullImage custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>');
             toolbar.append('<span class="btwthreeImages custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/galeriatres.svg"/></span>');
             toolbar.append('<span class="btwtwoImages custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/galeriados.svg"/></span>');
             toolbar.append('<span class="btwmoreInfo custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/masinfo.svg"/></span>');
             toolbar.append('<span class="btwlocations custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/ubicacion.svg"/></span>');          
                
        }

        if ( pt.find('.plantillaRuta').length > 0 ||
             pt.find('.plantillaMiniEvento').length > 0 ||
             pt.find('.plantillaMaxiEvento').length > 0 ||
             pt.find('.plantillaExperiencia').length > 0) {
             
             toolbar.append('<span class="btwnumberSection custom-wysiwyg"> <img src="/storage/app/media/uploaded-files/templates/parrafonumerado.svg"/></span>');
               
        }


        $('.btwtitleDesc').on('click',function(){
            self.pasteHtmlAtCaret(titleDesc);
            console.log(frElement);
            console.log('************');
            console.log($('.ace_content'));
        })

        $('.btwdestacado').on('click',function(){
            self.pasteHtmlAtCaret(destacado);
        })

        $('.btwfullImage').on('click',function(){
            self.pasteHtmlAtCaret(fullImage);
        })

        $('.btwthreeImages').on('click',function(){
            self.pasteHtmlAtCaret(threeImages);
        })

        $('.btwtwoImages').on('click',function(){
            self.pasteHtmlAtCaret(twoImages);
        })

        $('.btwnumberSection').on('click',function(){
            self.pasteHtmlAtCaret(numberSection);
        })

        $('.btwmoreInfo').on('click',function(){
            self.pasteHtmlAtCaret(moreInfo);
        })

        $('.btwlocations').on('click',function(){
            self.pasteHtmlAtCaret(locations);
        })

    }

    this.createButtonReloadTemplateWysiwyg = function(element){
        
        var ptid = $(element)[0].id;
        var pt = $('#'+ptid);
        var toolbar = pt.find('.fr-toolbar');
        
        toolbar.append('- <span class="custom-wysiwyg reloadTemplate"> <img class="reloadTemplateImage" src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>');

        $('.reloadTemplate').on('click',function(e){
            self.reloadTemplate(e);
        })
    }

    this.reloadTemplate = function(e){
        //var element = ($('#'+e.target.id).parent().parent().parent().find('.fr-wrapper').find('.fr-element'));
        var element = ($(e.target).parent().parent().parent().find('.fr-wrapper').find('.fr-element'));
        console.log(element);       
        element.html('hola');
    }


};