/*
 * Multi lingual control plugin
 * 
 * Data attributes:
 * - data-control="multilingual" - enables the plugin on an element
 * - data-default-locale="en" - default locale code
 * - data-placeholder-field="#placeholderField" - an element that contains the placeholder value
 *
 * JavaScript API:
 * $('a#someElement').multiLingual({ option: 'value' })
 *
 * Dependences:
 * - Nil
 */


+function ($) { "use strict";

    // Martínez :  add template to multilingual markups
    // create var
    var templatePre;
   

    // MULTILINGUAL CLASS DEFINITION
    // ============================

    var MultiLingual = function(element, options) {
        var self          = this
        this.options      = options
        this.$el          = $(element)

        this.$activeField  = null
        this.$activeButton = $('[data-active-locale]', this.$el)
        this.$dropdown     = $('ul.ml-dropdown-menu', this.$el)
        this.$placeholder  = $(this.options.placeholderField)

        this.$ss = $('.custom-select');

        var serv = window.location.hostname;

        this.$ss.on('change', function(event){
            
            var valor = $('#'+event.target.id).val();
            console.log(valor)
            var editor = $(element).find('.fr-wrapper .fr-view') 
            
            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            if( valor == 'mini evento') {

                if (serv == 'localhost'){
                    var tpmx = '<div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Jornadas Micológicas</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa de Jornadas Micológicas</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/jornadas-micologicas.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <p class="title">XX JORNADAS MICOLÓGICAS DEL PARQUE NATURAL DE LOS ALCORNOCALES</p> <p class="desc">La XX edición de las Jornadas Micológicas se celebrarán los próximos 19, 20 y 21 de enero. Una tradicional cita para los amantes de esta ciencia que se celebra cada año en el Parque Natural de los Alcornocales, en el municipio de <a target="_blank" class="section-link" href="https://www.jimenadelafrontera.es/">Jimena de la Frontera.</a></p> <p class="desc">Las jornadas recogen actividades en horarios de mañana y de tarde. Además de incluir una programación especial dedicada a los más pequeños. Conferencias, rutas y exposiciones de la mano del Grupo Mitológico Chantarella y otros expertos.</p> <p class="desc">Una experiencia que te acercará a nuestra naturaleza, al mundo de la micología y a su importante conservación en el ecosistema. </p> <p class="desc">Plazas limitadas: inscripciones hasta el 16/01 a las 14h. </p> <span class="download">Descargar el cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel.jpg"> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';
                        
                } else {
                    var tpmx = '<div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Jornadas Micológicas</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa de Jornadas Micológicas</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/jornadas-micologicas.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="txt-container"> <p class="title">XX JORNADAS MICOLÓGICAS DEL PARQUE NATURAL DE LOS ALCORNOCALES</p> <p class="desc">La XX edición de las Jornadas Micológicas se celebrarán los próximos 19, 20 y 21 de enero. Una tradicional cita para los amantes de esta ciencia que se celebra cada año en el Parque Natural de los Alcornocales, en el municipio de <a target="_blank" class="section-link" href="https://www.jimenadelafrontera.es/">Jimena de la Frontera.</a></p> <p class="desc">Las jornadas recogen actividades en horarios de mañana y de tarde. Además de incluir una programación especial dedicada a los más pequeños. Conferencias, rutas y exposiciones de la mano del Grupo Mitológico Chantarella y otros expertos.</p> <p class="desc">Una experiencia que te acercará a nuestra naturaleza, al mundo de la micología y a su importante conservación en el ecosistema. </p> <p class="desc">Plazas limitadas: inscripciones hasta el 16/01 a las 14h. </p> <span class="download">Descargar el cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel.jpg"> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/jornadas-micologicas2.jpg" alt=""> </div>';
                }
                
 
            } else if(valor == 'maxi evento') {
                
                if (serv == 'localhost'){
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Carreras de caballos</h1> <img class="brush" src="/cadizturismo/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa de carreras</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <p class="title">UN ESCENARIO SINGULAR, UN AMBIENTE INMEJORABLE</p> <p class="desc">Las Carreras de Caballos en las playas de Sanlúcar de Barrameda, que celebran el próximo mes de agosto su 173 aniversario. </p> <p class="desc">Un hipódromo natural formado en las orillas de las playas sanluqueñas, entre el azul del mar, el verde horizonte del Parque de Doñana y el Paseo Marítimo de la ciudad. Todo un espectáculo hípico reconocido mundialmente como Fiesta de Interés Turístico Internacional. </p> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <p class="title">EL ENCUENTRO HÍPICO VERANIEGO MÁS ESPERADO</p> <p class="desc">El encuentro se celebra cada año durante el mes de agosto, con la especial incógnita de que la fecha oficial no se establece hasta el final. El calendario de mareas es quien confirma esta cita anual, pues deben cuadrar las carreras con una buena bajamar para que los caballos purasangres puedan competir con orilla y pista suficiente por la playa. </p> <p class="desc">La jornada se divide siempre en dos ciclos, de tres días cada uno. El horario de las carreras es otro misterio añadido que no se descubre hasta el mismo día. La cita siempre será a la caída del atardecer, pero entran en juego factores como el estado de la marea y el número de caballos que compiten en la jornada. A partir de las 18h de la tarde, los espectadores comienzan a ubicarse dentro de este hipódromo natural.</p> </div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <p class="title">UN HIPÓDROMO IMPROVISADO</p> <p class="desc">Como si de uno convencional se tratase, el recinto se compone de taquillas de apuestas e instalaciones acondicionadas para caballos y jinetes alrededor de 20.000mts2. Antes de cada carrera los participantes desfilan ante sus espectadores para después situarse en los boxes de salida. </p> <!-- VIDEO YOUTUBE --> <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> <p class="desc">Las diferentes pruebas y premios dependen de las características del caballo, del peso del jinete y de otras consideraciones que establecen las diferentes categorías en las que se compite. <a class="section-link" href="https://www.carrerassanlucar.es/">La Real Sociedad de Carreras de Caballos de Sanlúcar</a>, se encarga cada año de la celebración de este acontecimiento deportivo, en el que además una importante cuantía de premios son donados por empresas, entidades e instituciones de la zona, desde la captación de patrocinadores que cada año realiza este asociación. </p> </div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <p class="title">PURO ESPECTÁCULO</p> <p class="desc">Las Carreras de Caballos de Sanlúcar ya se incluyen dentro de la Sociedad Estatal de Loterías y Apuestas del Estado, perteneciendo al calendario nacional de la apuesta hípica externa, junto a hipódromos como el de Madrid, San Sebastián, Dos Hermanas y Pineda. </p> <p class="desc">Durante el año se realizan otros actos previos como el Concurso Morfológico Caballar, en marzo, o la elección del Cartel anunciador. Durante el mes de agosto, se celebran además otros actos paralelos como concursos fotográficos, de cometas, castillos y figuras de arena y otras competiciones deportivas que atraen a miles de personas a este encuentro tradicional. </p> <span class="download">Descargar el cartel del evento <img src="/cadizturismo/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/cadizturismo/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <div class="section-img"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/ocio.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/cadizturismo/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';
                    
                } else {
                    var tpmx = '<!-- HEADER --> <div id="header-event-fr" class="header-event main-event"> <div class="header-container"> <div class="header-txt"> <h1 class="txt">Carreras de caballos</h1> <img class="brush" src="/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""> <div class="send-info"> <div class="button-send-info"> <a href="#">Descarga el programa de carreras</a> </div> </div> </div> </div> <!-- NUEVA FOTO --> <img class="background-image" value="cover" src="/storage/app/media/uploaded-files/templates/caballos.jpg" alt=""> </div> <div id="phantom-div"></div> <!-- SECTION TXT--> <div class="section-txt"> <div class="big-number-container"> <span class="step">1</span> </div> <div class="txt-container"> <p class="title">UN ESCENARIO SINGULAR, UN AMBIENTE INMEJORABLE</p> <p class="desc">Las Carreras de Caballos en las playas de Sanlúcar de Barrameda, que celebran el próximo mes de agosto su 173 aniversario. </p> <p class="desc">Un hipódromo natural formado en las orillas de las playas sanluqueñas, entre el azul del mar, el verde horizonte del Parque de Doñana y el Paseo Marítimo de la ciudad. Todo un espectáculo hípico reconocido mundialmente como Fiesta de Interés Turístico Internacional. </p> </div> </div> <!-- SECTION IMG --> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos2.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">2</span> </div> <div class="txt-container"> <p class="title">EL ENCUENTRO HÍPICO VERANIEGO MÁS ESPERADO</p> <p class="desc">El encuentro se celebra cada año durante el mes de agosto, con la especial incógnita de que la fecha oficial no se establece hasta el final. El calendario de mareas es quien confirma esta cita anual, pues deben cuadrar las carreras con una buena bajamar para que los caballos purasangres puedan competir con orilla y pista suficiente por la playa. </p> <p class="desc">La jornada se divide siempre en dos ciclos, de tres días cada uno. El horario de las carreras es otro misterio añadido que no se descubre hasta el mismo día. La cita siempre será a la caída del atardecer, pero entran en juego factores como el estado de la marea y el número de caballos que compiten en la jornada. A partir de las 18h de la tarde, los espectadores comienzan a ubicarse dentro de este hipódromo natural.</p> </div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos3.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">3</span> </div> <div class="txt-container"> <p class="title">UN HIPÓDROMO IMPROVISADO</p> <p class="desc">Como si de uno convencional se tratase, el recinto se compone de taquillas de apuestas e instalaciones acondicionadas para caballos y jinetes alrededor de 20.000mts2. Antes de cada carrera los participantes desfilan ante sus espectadores para después situarse en los boxes de salida. </p> <!-- VIDEO YOUTUBE --> <iframe src="https://www.youtube.com/embed/C3mJHcRWRSM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> <p class="desc">Las diferentes pruebas y premios dependen de las características del caballo, del peso del jinete y de otras consideraciones que establecen las diferentes categorías en las que se compite. <a class="section-link" href="https://www.carrerassanlucar.es/">La Real Sociedad de Carreras de Caballos de Sanlúcar</a>, se encarga cada año de la celebración de este acontecimiento deportivo, en el que además una importante cuantía de premios son donados por empresas, entidades e instituciones de la zona, desde la captación de patrocinadores que cada año realiza este asociación. </p> </div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos4.jpg" alt=""> </div> <div class="section-txt"> <div class="big-number-container"> <span class="step">4</span> </div> <div class="txt-container"> <p class="title">PURO ESPECTÁCULO</p> <p class="desc">Las Carreras de Caballos de Sanlúcar ya se incluyen dentro de la Sociedad Estatal de Loterías y Apuestas del Estado, perteneciendo al calendario nacional de la apuesta hípica externa, junto a hipódromos como el de Madrid, San Sebastián, Dos Hermanas y Pineda. </p> <p class="desc">Durante el año se realizan otros actos previos como el Concurso Morfológico Caballar, en marzo, o la elección del Cartel anunciador. Durante el mes de agosto, se celebran además otros actos paralelos como concursos fotográficos, de cometas, castillos y figuras de arena y otras competiciones deportivas que atraen a miles de personas a este encuentro tradicional. </p> <span class="download">Descargar el cartel del evento <img src="/storage/app/media/uploaded-files/templates/yellow-arrow.svg"> </span> <img class="cartel" src="/storage/app/media/uploaded-files/templates/cartel-caballos.jpg"> </div> </div> <div class="section-img"> <img src="/storage/app/media/uploaded-files/templates/caballos5.jpg" alt=""> </div> <div class="icons-row"> <div class="i-container"> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/deporte-grey.svg"> <p class="also-desc">Deporte</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/ocio.svg"> <p class="also-desc">Ocio</p> </div> <div class="also-feature"> <img src="/storage/app/media/uploaded-files/templates/cultura-grey.svg"> <p class="also-desc">Cultura</p> </div> </div> </div>';
                    
                }
            }
           
            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            if(editor.html()=='<p><br></p>' || editor.html()=='<p></p>' || editor.html()==''){
                $(editor).html(tpmx)
            }
        })


        this.$dropdown.on('click', '[data-switch-locale]', function(event){

            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            var boton = ($(event.target));
            var idioma = (boton[0].dataset.switchLocale);
            var padreTemplate;
            var padre;
          
            if( idioma == 'es' || padreTemplate  === undefined || padreTemplate === null){
                padre = ($(event.target).parent().parent().parent().parent().parent().parent());
                padreTemplate = ($(padre).find('textarea').prev().find('.fr-wrapper').html());
            }

            var selectedLocale = $(this).data('switch-locale')
            self.setLocale(selectedLocale)

            /*
             * If Ctrl/Cmd key is pressed, find other instances and switch
             */
            if (event.ctrlKey || event.metaKey) {
                $('[data-switch-locale="'+selectedLocale+'"]').click()
            }

            // Andrés Martínez :  add template to multilingual markups & insert template at markups when empty
            //var padre = ($(event.target).parent().parent().parent().parent().parent().parent());
            var hijoActual = ($(padre).find('textarea').prev().find('.fr-wrapper').find('.fr-element'));
            if(hijoActual.html()=='<p><br></p>' || hijoActual.html()=='<p></p>' || hijoActual.html()==''){
                hijoActual.html(padreTemplate);
            }
            
        })

        this.$placeholder.on('input', function(){
            self.$activeField.val(this.value)
        })

        /*
         * Init locale
         */
        this.activeLocale = this.options.defaultLocale
        this.$activeField = this.getLocaleElement(this.activeLocale)
        this.$activeButton.text(this.activeLocale)
    }

    MultiLingual.DEFAULTS = {
        defaultLocale: 'en',
        defaultField: null,
        placeholderField: null
    }

    MultiLingual.prototype.getLocaleElement = function(locale) {
        var el = this.$el.find('[data-locale-value="'+locale+'"]')
        return el.length ? el : null
    }

    MultiLingual.prototype.getLocaleValue = function(locale) {
        var value = this.getLocaleElement(locale)
        
        return value ? value.val() : null
    }

    MultiLingual.prototype.setLocaleValue = function(value, locale) {
        if (locale) {
            this.getLocaleElement(locale).val(value)
        }
        else {
            this.$activeField.val(value)
        }
    }

    MultiLingual.prototype.setLocale = function(locale) {
        this.activeLocale = locale
        this.$activeField = this.getLocaleElement(locale)
        this.$activeButton.text(locale)

        this.$placeholder.val(this.getLocaleValue(locale))
        this.$el.trigger('setLocale.oc.multilingual', [locale, this.getLocaleValue(locale)])
    }

    // MULTILINGUAL PLUGIN DEFINITION
    // ============================

    var old = $.fn.multiLingual

    $.fn.multiLingual = function (option) {
        var args = Array.prototype.slice.call(arguments, 1), result
        this.each(function () {
            var $this   = $(this)
            var data    = $this.data('oc.multilingual')
            var options = $.extend({}, MultiLingual.DEFAULTS, $this.data(), typeof option == 'object' && option)
            if (!data) $this.data('oc.multilingual', (data = new MultiLingual(this, options)))
            if (typeof option == 'string') result = data[option].apply(data, args)
            if (typeof result != 'undefined') return false
        })

        return result ? result : this
    }

    $.fn.multiLingual.Constructor = MultiLingual

    // MULTILINGUAL NO CONFLICT
    // =================

    $.fn.multiLingual.noConflict = function () {
        $.fn.multiLingual = old
        return this
    }

    // MULTILINGUAL DATA-API
    // ===============
    $(document).render(function () {
        $('[data-control="multilingual"]').multiLingual()
    })

}(window.jQuery);
