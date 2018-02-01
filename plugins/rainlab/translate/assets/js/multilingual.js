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
