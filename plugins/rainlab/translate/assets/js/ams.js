// Andrés Martinez : ams.js
var ams = function(){

	var serv = window.location.hostname;
    var self = this;

    this.init = function(){
    }

    /*this.eventDuplicate = function(){

        var btnd = $('.duplicate');
        var allev = $('#allev');

        allev.on('click', function(){
            console.log('resfrescando');
            //allev.click();
        });

        btnd.on('click', function(){
            console.log('toktok');
            allev.click();
        });

    }*/

    /*this.eventDuplicateRefrsh = function(){

        $( document ).ready(function() {
            allev.click();
            var btnd = $('.duplicate');
            var allev = $('#allev');

            console.log('resfrescando');


        });
    }*/

	// Enable insert events templates
    this.eventSelectTemplate = function(){

		var selectEventTemplate = $('.custom-select');

		selectEventTemplate.on('change', function(event){

            var valor = $('#'+event.target.id).val();
            var atextarea = $(event.target).parent().parent().parent().parent().find('.fr-wrapper').find('.fr-element');

            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            if( valor == 'mini evento') {

                if (serv == 'localhost'){
                    var tpmx = '<div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <p class="title">TITULAR</p> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p> <span class="download">Descargar el cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';

                } else {
                    var tpmx = '<div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';
                }


            } else if(valor == 'maxi evento') {

                if (serv == 'localhost'){
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <p class="title">TITULAR</p> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p></div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <p class="title">TITULAR 2</p> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p></div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <p class="title">TITULAR 3</p> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p></div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <p class="title">TITULAR 4</p> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p> <span class="download">Descargar el cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';

                } else {
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Título</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <h3 class="title">TITULAR</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 2</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> </div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 3</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p> <!-- VIDEO YOUTUBE <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --></div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <h3 class="title">TITULAR 4</h3> <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p><span class="download">Ver cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/ocio-grey.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';

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

        console.log('entra');
        var sel, range;

        if (window.getSelection) {
             console.log('entra2');
            // IE9 and non-IE
            sel = window.getSelection();

            if (sel.getRangeAt && sel.rangeCount) {

                range = sel.getRangeAt(0);
                range.deleteContents();

                 console.log(range);

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
                      console.log('lastNode');
                      console.log(lastNode);

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

    this.createButtonsWysiwyg = function(){

		var toolbar = $('.fr-toolbar');
		toolbar.append('<span class="custom-wysiwyg" id="insertP"> <img src="/storage/app/media/uploaded-files/templates/destacado.svg"/></span>')

		$('#insertP').on('click',function(){
           console.log('saludando');
           self.pasteHtmlAtCaret('<p>Despidiendose</p>');
        })

		//console.log(toolbar);

	}

};
