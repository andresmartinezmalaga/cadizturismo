<?php namespace Backend\Classes;

class PagesTemplates
{
  static function getFinalTemplate($template){
    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
      $preurl = '/cadizturismo';
    } else {
      $preurl = '';
    }

    $result = str_replace('***_preurl_***',$preurl,$template);

    return $result;
  }

  static $comarcas = '
  <!-- HEADER -->
  <div class="header-general header-comarcas">
    <div class="header-container">
      <div class="header-txt">
        <h1 class="txt">Comarcas</h1>
        <img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
      </div>
    </div>
    <img class="background-image fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/comarcas.jpg" alt="">
  </div>

  <div class="main-section-comarcas">
    <div class="main-txt">

      <p class="title">CÁDIZ, UNA
        <br>HISTORIA ÚNICA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>La provincia de Cádiz es la más meridional de la Península Ibérica.</strong> Tiene un perímetro de 586 kms de los que 260 corresponden a la costa. Su superficie es de 7.385 kms repartidos en sus 44 municipios. Su población supera ligeramente el millón de habitantes, dando una densidad por encima de la media nacional.</p>

      <p class="desc">Su Historia es antiquísima. Tartesos y fenicios visitaron estas tierras hace más de 3.000 años, y en un punto de este territorio levantaron la antigua Gadir, que se sitúa a unos 1.100 años a. de C., convirtiendo a la capital de la provincia en la más antigua de Occidente. Los romanos y visigodos también dejaron sus huellas y a partir del año 711 fue territorio musulmán, hasta que Alfonso X El Sabio la reconquistó en la segunda mitad del siglo XIII incorporándola al Reino de Castilla.</p>

      <p class="desc"><strong>Desde esta provincia se contribuyó notablemente al descubrimiento y colonización de América durante el s.XV. Cristóbal Colón</strong> y otros ilustres marinos utilizaron sus puertos como punto de partida hacia el Nuevo Continente.</p>

      <p class="desc"><strong>En el s.XVIII, "siglo de Oro" de Cádiz, se monopoliza el comercio de ultramar, lo que le imprime un carácter cosmopolita, penetrando nuevas ideas que dieron lugar a la apertura liberal y democrática recogida en la Constitución de 1812.</strong></p>

      <p class="desc">La provincia de Cádiz, privilegiada y singular, reúne todos los atractivos que puedan apetecer quienes valoran el turismo en su verdadera dimensión cultural y festiva, ecológica y monumental, costumbrista, auténtica y esencialmente andaluza.</p>
    </div>

    <div class="main-events-container">
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/bahia-cadiz.jpg">
        <div class="txt-container">

          <p class="name">BAHÍA DE
            <br>CÁDIZ</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/campi.jpg">
        <div class="txt-container">

          <p class="name">CAMPIÑA
            <br>DE JEREZ</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/campo-gibraltar.jpg">
        <div class="txt-container">

          <p class="name">CAMPO DE GIBRALTAR</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/costa-noroeste.jpg">
        <div class="txt-container">

          <p class="name">COSTA
            <br>NOROESTE</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/janda.jpg">
        <div class="txt-container">

          <p class="name">LA JANDA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="comarca.html">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/sierra.jpg">
        <div class="txt-container">

          <p class="name">SIERRA DE
            <br>CÁDIZ</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer comarca <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-txt-comarca">
    <div class="txt-container">

      <p class="title">ARTE Y CULTURA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>El paso de las diferentes culturas por esta tierra a lo largo de su ancestral historia, ha dejado su huella. Las pinturas rupestres del "Tajo de las Figuras"</strong> en el municipio de Benalup; dos sarcófagos fenicios, actualmente en el Museo de Cádiz, o restos de ciudades romanas como <strong>"Baelo Claudia" en Tarifa, y "Carteia" en San Roque</strong>, así nos lo demuestran.</p>

      <p class="desc"><strong>Más de 30 castillos y recintos fortificados</strong> se pueden encontrar a lo largo de toda la provincia, algunos de los cuales, en buen estado de conservación.</p>

      <p class="desc">En el arte religioso, su riqueza monumental es extraordinaria. Buena muestra de ello es <strong>La Cartuja de Jerez o las catedrales de Cádiz y Jerez.</strong></p>

      <p class="desc">En cuanto a muestras pictóricas, pueden encontrarse magníficos <strong>lienzos de El Greco, Murillo, Zurbarán y Goya</strong>, repartidos en diferentes iglesias y museos de la provincia.</p><a class="download" href="/es/cultura">Descubre toda la cultura de Cádiz <img src="***_preurl_***/storage/app/media/uploaded-files/templates/yellow-arrow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a></div>
  </div>

  <div class="section-img-comarca"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/comarcas2.jpg" alt="" class="fr-fic fr-dii"></div>
  <div class="section-txt-comarca">
    <div class="txt-container">

      <p class="title">BODEGAS Y
        <br>GASTRONOMÍA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>La cocina gaditana está influenciada sobre todo por los vinos que se producen en la provincia y por la amplia gama de pescados propios del litoral gaditano</strong>: doradas, urtas, róbalos, acedías, mojarras, etc., así como por sus mariscos: gambas, cigalas, bocas, cañaíllas..., y los célebres langostinos de Sanlúcar de Barrameda.</p>

      <p class="desc">La repostería, riquísima, con clara influencia de los árabes y la aportación de los conventos de las monjas. Son deliciosos el tocino de cielo, los alfajores de Medina Sidonia, el turrón y los churros de Cádiz, y los famosos "pestiños”, exquisitos dulces navideños típicos en toda la provincia.</p>

      <p class="desc">Los numerosos restaurantes, bares, marisquerías, tabernas y "chiringuitos" (bares junto a la playa) nos dan la oportunidad de probar esta variada gastronomía y sus excelentes vinos: finos, amontillados, olorosos, manzanillas, así como sus brandies criados en la provincia, y que dan un especial carácter a esta tierra.</p>

      <p class="desc"><strong>Quienes llegan a esta provincia no deben dejar de visitar alguna de las impresionantes Bodegas de Jerez, El Puerto de Santa María, Sanlúcar, o Chiclana donde se crían y envejecen exquisitos vinos como el fino, la manzanilla, el moscatel, y el jerez o “sherry”, embajador de España en el mundo entero.&nbsp;</strong></p><a class="download" href="/es/gastronomia">Descubre toda la gastronomía de Cádiz <img src="***_preurl_***/storage/app/media/uploaded-files/templates/yellow-arrow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a></div>
  </div>
  <div class="section-img-comarca">
    <img src="***_preurl_***/storage/app/media/uploaded-files/templates/comarcas3.jpg" alt="" class="fr-fic fr-dii">
    </div>
  <div class="section-txt-comarca">
    <div class="txt-container">

      <p class="title">NATURALEZA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>Posee la provincia una gran variedad de espacios naturales, de excepcional riqueza ecológica y diversidad de recursos propios; especies faunísticas amenazadas, zonas húmedas y sectores costeros todavía intactos, que se han sabido mantener respetando su entorno.</strong></p>

      <p class="desc">Se puede hacer realidad un apasionante recorrido por los seis parques naturales que se encuentran en esta provincia y que se relacionan en esta <a href="http://www.dipucadiz.es/patronatoturismocadiz">Web del Patronato Provincial de Turismo</a> dentro del apartado "Parques Naturales".</p>

      <p class="desc">Sin duda alguna, uno de los principales recursos naturales de la provincia son sus playas, de arena blanca y fina, aguas transparentes y con la ventaja de su gran variedad.</p>

      <p class="desc">En sus 260 Kms. de costa se pueden encontrar lo mismo playas vírgenes, que otras urbanas dotadas de infraestructura; pequeñas calas o también arenales de varios kilómetros; playas familiares y otras íntimas; de aguas tranquilas, o barridas por fuertes vientos, ideales para la práctica del windsurfing.</p>

      <p class="desc">Muchas de ellas obtienen anualmente el distintivo de la Bandera Azul de los mares limpios de Europa. En total 138 Kms de playas.</p><a class="download" href="/es/naturaleza">Descubre toda la naturaleza de Cádiz <img src="***_preurl_***/storage/app/media/uploaded-files/templates/yellow-arrow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a></div>
  </div>
  <div class="section-img-comarca">
    <img src="***_preurl_***/storage/app/media/uploaded-files/templates/comarcas4.jpg" alt="" class="fr-fic fr-dii">
  </div>
  ';

  static function getTComarcas(){
    $comarcas = PagesTemplates::getFinalTemplate(PagesTemplates::$comarcas);
    return $comarcas;
  }

  static $comarca = '
  <!-- HEADER -->
  <div class="header header-comarca">
    <div class="header-container header-village-container">
      <div class="header-txt header-txt-village">
        <h1 class="txt"><span class="first-word">Nombre de la comarca</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/janda2.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">TITULAR</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas. </p>
    </div>
  </div>
  <!-- IMAGEN -->
  <div class="img-village">
    <div class="txt-container">

      <p class="title">TÍTULO DEL DESTACADO</p>

      <p class="desc">Puedes destacar una ruta, una playa o un evento. Escribe una breve descripción sobre el enlace que vas a sugerir.</p><a class="events-link" href="#">Conocer <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
      <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
      <!-- NUEVA FOTO -->
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">MUNICIPIOS DE
        <br>(COMARCA)</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      // <p class="desc small-desc">Déjate enamorar por Alcalá de los Gazules, Barbate, Benalup-Casas viejas, Conil de la Frontera, Medina Sidonia, Pierna de Rivera, San José del Valle y Vejer de la Frontera.</p>
    </div>
  </div>
  <div class="all-exps">
    <div class="all-events-container">
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/conil.jpg">
        <div class="txt-container">

          <p class="name">MUNICIPIO 1</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/barbate1.jpg">
        <div class="txt-container">

          <p class="name">MUNICIPIO 2</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="municipio.html">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/vejer.jpg">
        <div class="txt-container">

          <p class="name">MUNICIPIO 3</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
  </div>';

  static function getTComarca(){
    $comarca = PagesTemplates::getFinalTemplate(PagesTemplates::$comarca);
    return $comarca;
  }


  static $municipios = '
  <!-- HEADER -->
  <div class="header-general header-municipios">
    <div class="header-container">
      <div class="header-txt">
        <h1 class="txt">Municipios</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/municipios.jpg" alt="">
  </div>
  <div class="section-txt-comarca">
    <!-- NUEVO DIV -->
    <div class="txt-container">
      <p class="title">LA MAGIA HABITA
        <br>EN CADA RINCÓN
        <br>DE CÁDIZ</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Una provincia que destaca por sus contrastes, 3000 años de historia y 44 municipios que esconden rincones increíbles en su gran variedad de paisajes y culturas.</p>
    </div>
  </div>';

  static function getTMunicipios(){
    $municipios = PagesTemplates::getFinalTemplate(PagesTemplates::$municipios);
    return $municipios;
  }

  static $municipio = '
  <!-- HEADER -->
  <div class="header header-village">
    <div class="header-container header-village-container">
      <div class="header-txt header-txt-village">
        <h1 class="txt"><span class="first-word">Nombre del municipio</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" value="cover" src="***_preurl_***/storage/app/media/uploaded-files/templates/barbate1.jpg" alt="">
  </div>
  <!-- TXT-->
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">TITULAR</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Escribe aquí el contenido a desarrollar y agrega una imagen adicional si lo necesitas.</p>
    </div>
  </div>
  <!-- IMAGEN -->
  <div class="img-village">
    <div class="txt-container">

      <p class="title">Título del destacado</p>

      <p class="desc">Puedes destacar una ruta, una playa o un evento. Escribe una breve descripción sobre el enlace que vas a sugerir.</p>
      <a class="events-link" href="rutas.html">Conocer <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
      <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
      <!-- NUEVA FOTO -->
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">EXPERIENCIAS
        <br>EN (MUNICIPIO)</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
    </div>
  </div>
  <div class="all-exps">
    <div class="all-events-container">
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/atun.jpg">
        <div class="txt-container">

          <p class="name">TÍTULO EXPERIENCIA 1</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Nº días</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Tipo de visita</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-events.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 1</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 2</p>
            </div>
          </div>
          <div class="button-container"><a class="see-event" href="#">Ver experiencia <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/faro.jpg">
        <div class="txt-container">

          <p class="name">TÍTULO EXPERIENCIA 2</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Nº días</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Tipo de visita</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 1</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 2</p>
            </div>
          </div>
          <div class="button-container"><a class="see-event" href="#">Ver experiencia <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/brena.jpg">
        <div class="txt-container">

          <p class="name">TÍTULO EXPERIENCIA 3</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Nº días</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Tipo de visita</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-events.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 1</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Interés 2</p>
            </div>
          </div>
          <div class="button-container"><a class="see-event" href="#">Ver experiencia <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
  </div>';

  static function getTMunicipio(){
    $municipio = PagesTemplates::getFinalTemplate(PagesTemplates::$municipio);
    return $municipio;
  }


  static $playas = '
  <!-- HEADER -->
  <div class="header-general header-playas">
    <div class="header-container">
      <div class="header-txt">
        <h1 class="txt">Playas</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/playas.jpg" alt="">
  </div>

  <div class="section-txt-comarca">
    <!-- NUEVO DIV -->
    <div class="txt-container">
      <p class="title">PLAYAS
        <br>LLENAS
        <br>DE LUZ</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>La provincia reúne 260 kilómetros de costa y 138 kilómetros de playas: calas, ensenadas, arenales de varios kilómetros.</strong> Hay playas con historia como la de Trafalgar, frente a la que se libró la famosa batalla y playas de película como la de La Caleta donde se grabaron escenas del 007. Hay playas pioneras en Europa como la Victoria, en conseguir la certificación de gestión medioambiental de la UE y playas de colores como las de Tarifa, con el vértigo de los fly-surf y sus cometas. Playas ideales para la práctica del windsurf; igualmente la pesca submarina goza de numerosos adeptos entre las transparentes aguas de sus numerosas playas: Los Lances, Bolonia, y Valdevaqueros entre otras. En total, 83 playas distintas.</p>

      <p class="desc">Llaman la atención los acantilados de los Caños de Meca (Barbate) y las calas de Conil. En algunas nos encontramos con monumentos naturales como las dunas de la playa de Bolonia o los corrales de pesca de Rota.</p>

      <p class="desc">En Cádiz es muy frecuente que el mar se encuentre con la montaña, con paisajes de pinares, bosques y marismas. Punta Candor en Rota y la playa del Castillo de San Fernando, son playas muy naturales, pero cada una a su manera: si en una destacan los macizos rocosos, en otras sólo se puede acceder a nado o a pie.</p>
    </div>
  </div>';

  static function getTPlayas(){
    $playas = PagesTemplates::getFinalTemplate(PagesTemplates::$playas);
    return $playas;
  }

  static $playa = '
  <!-- HEADER -->
  <div class="header header-playa">
    <div class="header-container header-village-container">
      <div class="header-txt header-txt-village">
        <h1 class="txt"><span class="first-word">Nombre de la playa</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" value="cover" src="***_preurl_***/storage/app/media/uploaded-files/templates/playa-lances.jpg" alt="">
  </div>
  <!-- TXT-->
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">TITULAR 1</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Situado en la comarca de La Janda, Barbate es un precioso pueblo gaditano que alberga uno de los puertos pesqueros más famosos de Andalucía. A lo largo de los 25 kilómetros de costa que agrupa el término municipal, encontrarás pueblos y pedanías como Zahara de los Atunes, Caños de Meca y Zahora, y en ellos, playas naturales, dunas y acantilados que componen uno de los núcleos turísticos más reconocidos del sur de España.</p>

      <p class="desc">El municipio ofrece la posibilidad de realizar una gran variedad de rutas de gran interés ecológico y paisajístico gracias al Parque Natural de la Breña y las Marismas de Barbate.</p>

      <p class="desc">Las condiciones de pesca que ofrece la zona permiten hacen destacar a su gastronomía por el famoso atún de Almadraba, un manjar único que merece la pena disfrutar en los restaurantes de Barbate.</p>
    </div>
  </div>
  <!-- IMAGEN -->
  <div class="img-village">
    <div class="txt-container">

      <p class="title">Marismas de Barbate</p>

      <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p><a class="events-link" href="#playas">Selección de rutas naturales <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
      <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
      <!-- NUEVA FOTO -->
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">3 COSAS QUE
        <br>HACER EN LA PLAYA
        <br>DE LOS LANCES</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
  </div>
  <div class="all-exps" id="exps-playa">
    <div class="all-events-container">
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/kite.jpg">
        <div class="txt-container">

          <p class="name">3 SIXTY KITE SCHOOL</p>

          <p class="subtitle">Utilizamos el método IKO y todos los instructores están certificados en IKO de nivel 3.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="#">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/arte-vida.jpg">
        <div class="txt-container">

          <p class="name">ARTE Y VIDA TARIFA</p>

          <p class="subtitle">Lugar ideal para el descanso, y disfrutar de nuestras terrazas, restaurante o zonas chill out.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="#">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/camping.jpg">
        <div class="txt-container">

          <p class="name">CAMPING TORRE DE LA PEÑA</p>

          <p class="subtitle">Camping, Bungalows y Restaurante en Tarifa con un pesacado de primera.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="#">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
    </div>
  </div>
  <div class="icons-row">
    <div class="i-container">
      <div class="also-feature main-feature">
        <!-- El icono de la urbana se llama urban-beach.svg -->
        <img src="***_preurl_***/storage/app/media/uploaded-files/templates/virgin-beach.svg" class="fr-fil fr-dib">
        <p class="also-desc">Playa virgen</p>
      </div>
      <div class="also-feature main-feature">
        <!-- El icono de la urbana se llama urban-beach.svg -->
        <img src="***_preurl_***/storage/app/media/uploaded-files/templates/urban-beach.svg" class="fr-fil fr-dib">
        <p class="also-desc">Playa virgen</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Naturaleza</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/deporte-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Deporte</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/animalesg.svg" class="fr-fil fr-dib">

        <p class="also-desc">Animales</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/campingg.svg" class="fr-fil fr-dib">

        <p class="also-desc">Camping</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/instalacionesg.svg" class="fr-fil fr-dib">

        <p class="also-desc">Instalaciones</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/nudistag.svg" class="fr-fil fr-dib">

        <p class="also-desc">Nudista</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/restauraciong.svg" class="fr-fil fr-dib">

        <p class="also-desc">Restauración</p>
      </div>
    </div>
  </div>';

  static function getTPlaya(){
    $playa = PagesTemplates::getFinalTemplate(PagesTemplates::$playa);
    return $playa;
  }

  static $naturaleza = '
  <!-- HEADER -->
  <div class="header-general header-naturaleza">
    <div class="header-container">
      <div class="header-txt">
        <h1 class="txt">Naturaleza</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/naturaleza.jpg" alt="">
  </div>
  <div class="section-txt-comarca">
    <!-- NUEVO DIV -->
    <div class="txt-container">
      <p class="title">CÁDIZ ES
        <br>NATURALEZA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Conoce una de las provincias con mayor diversidad de España. 6 parques naturales que descubrir por tierra o mar, todos ellos escenarios perfectos para disfrutar de la experiencia que necesitas.</p>
    </div>
  </div>
  <div class="static-structure">
    <div class="page">
      <div class="overlay-img">
        <br>
      </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/via-verde1.jpg">
      <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/via-verde.svg">
      <div class="txt-container">

        <p class="name">VÍA VERDE DE LA SIERRA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
        <a href="via-verde.html">Ver Vía Verde de la Sierra <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
    </div>
    <div class="page">
      <div class="overlay-img">
        <br>
      </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/bird-watching.jpg">
      <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/bird-watching.svg">
      <div class="txt-container">

        <p class="name">BIRDWATCHING</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
        <a href="birdwatching.html">Ver birdwatching <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
    </div>
    <div class="page">
      <div class="overlay-img">
        <br>
      </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/espacios-naturales.jpg">
      <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/espacios-naturales.svg">
      <div class="txt-container">

        <p class="name">ESPACIOS NATURALES</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
        <a href="espacios-naturales.html">Ver espacios naturales <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
    </div>
  </div>';

  static function getTNaturaleza(){
    $naturaleza = PagesTemplates::getFinalTemplate(PagesTemplates::$naturaleza);
    return $naturaleza;
  }

  static $viaVerde = '
  <!-- HEADER -->
  <div class="header header-viaverde" id="#ruta-viaverde">
  <div class="header-container header-village-container">
    <div class="header-txt header-txt-village">
      <h1 class="txt" id="natu-via">Vía Verde de la Sierra</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/via-verde1.jpg" alt="">
  </div>
  <!-- TXT-->
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">EL ENCANTO
        <br>DE LA RUTA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">La ruta de Vía Verde de la Sierra es una ruta natural que atraviesa una antigua estructura ferroviaria en desuso reconvertida ahora en trayecto turístico. Una enriquecedora excursión por plena naturaleza a través de las sierras Béticas andaluzas.</p>

      <p class="desc">La ruta se inicia en la antigua estación del municipio de Olvera, bajo la estampa de su histórico castillo, y finaliza en la antigua estación de Puerto Serrano, en la vega del río Guadalete. Una travesía de 36km de entorno natural con 30 túneles que atravesar, 4 viaductos que cruzar y 5 estaciones para descansar que transcurre paralela a las orillas de numerosos ríos.</p>

      <p class="desc">Encontrarás también una amplia oferta de actividades&nbsp;deportivas, educativas, turísticas y medioambientales. Como la sede de la Fundación Vía Verde de la Sierra, hoteles restaurante, espacio para autocaravanas, y el destacado Centro de Interpretación y Observatorio ornitológico, donde aprenderás todo lo que necesitas saber sobre la Vía Verde de la Sierra a través de soportes interactivos y proyecciones en 4D.</p>

      <p class="desc">Disfruta de diferentes actividades al aire libre a través de este completo trayecto que podrás realizar a pie, en bici o a caballo.</p>
    </div>
  </div>
  <!-- IMAGEN -->
  <div class="featured-element featured-viaverde">
    <div class="txt-container">

      <p class="title">GARGANTA VERDE</p>

      <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p><a class="events-link" href="rutas.html">Selección de rutas naturales <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
      <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/viaverde2.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">DISFRUTA LA
        <br>VÍA VERDE
        <br>DE LA MANO DE...</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
  </div>
  <div class="all-exps" id="exps-playa">
    <div class="all-events-container">
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/adventour.jpg">
        <div class="txt-container">

          <p class="name">ADVENTOUR</p>

          <p class="subtitle">Empresa de turismo, deporte, aventura y animación con sede en Olvera.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="http://www.adventour.es/" target="_blank">Ver rutas que ofrece <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/sierra-viva.jpg">
        <div class="txt-container">

          <p class="name">SIERRA VIVA</p>

          <p class="subtitle">Empresa con gran variedad de rutas adaptadas a practicar deporte al aire libre.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="http://www.sierraviva.es/" target="_blank">Ver rutas que ofrece <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
      <div class="event event-playa">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/coripe.jpg">
        <div class="txt-container">

          <p class="name">CORIPE RURAL</p>

          <p class="subtitle">Una de las empresas pioneras y con más experiencia en actividades medioambientales.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a class="see-event" href="http://www.coriperural.es/" target="_blank">Ver rutas que ofrece <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
      </div>
    </div>
  </div>
  <div class="icons-row">
    <div class="i-container">
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Naturaleza</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/deporte-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Deporte</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Ruta</p>
      </div>
    </div>
  </div>';

  static function getTViaVerde(){
    $viaVerde = PagesTemplates::getFinalTemplate(PagesTemplates::$viaVerde);
    return $viaVerde;
  }

    static $birdwatching = '
    <!-- HEADER -->
    <div class="header header-birdwatching">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Birdwatching</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/bird-watching.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">EL PARAÍSO DE <br> LAS AVES</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Sé testigo de la mayor migración de aves de Europa entre dos mares y dos continentes. </p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-bird">
      <div class="txt-container">
        <p class="title">RUTA BIRDWATCHING EN TARIFA</p>
        <p class="desc">El escenario perfecto para dejarte envolver por un entorno alucinante. </p>
        <a class="events-link" href="rutas.html">Selección de rutas naturales <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/birdwatching.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/bird-tarifa.jpg">
          <div class="txt-container">
            <p class="name name-bird">BIRDING TARIFA</p>
            <p class="subtitle">Observación de Aves en el estrecho de Gibraltar, migraciones de aves de Europa. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.birdingtarifa.es/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/birdacadiz.jpg">
          <div class="txt-container">
            <p class="name name-bird">BIRDCÁDIZ</p>
            <p class="subtitle">Portal donde encontrarás todo lo relacionado con las aves en Cádiz.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://birdcadiz.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/cadizbird.jpg">
          <div class="txt-container">
            <p class="name name-bird">CÁDIZ BIRDING</p>
            <p class="subtitle">Cadiz Birding emplea guías profesionales para experimentados.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.cadizbirding.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static function getTBirdwatching(){
      $birdwatching = PagesTemplates::getFinalTemplate(PagesTemplates::$birdwatching);
      return $birdwatching;
    }

    static $espaciosnaturales = '
    <!-- HEADER -->
    <div class="header-general header-espacios">
      <div class="header-container">
        <div class="header-txt">
          <h1 id="espacios" class="txt">Espacios naturales</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/espacios.jpg">
    </div>
    <div class="main-section-comarcas">
      <div class="main-txt">
        <p class="title">ENCUENTRA UN <br> LUGAR MÁGICO</p>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
        <p class="desc">Encontrarás un lugar mágico que trasciende a las descripciones. Su paisaje montañoso y multicolor, sus recónditas sendas, la gracia y el embrujo de sus espacios naturales... te envolverán en un mundo tan especial que no podrás olvidar.</p>
        <p class="desc">El enclave natural de Cádiz conquista al visitante más atrevido, al que desea disfrutar activamente de las ventajas de su situación geográfica o al que prefiere deleitarse con sus rincones más escondidos. Te conquistará.</p>
      </div>
      <div id="main-espacios" class="main-events-container">
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/sierra-grazalema.jpg">
          <div class="txt-container">
            <p class="name">SIERRA DE <br> GRAZALEMA</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/alcornocales.jpg">
          <div class="txt-container">
            <p class="name">LOS <br>ALCORNOCALES</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="espacio-natural.html">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/estrecho.jpg">
          <div class="txt-container">
            <p class="name">DEL ESTRECHO</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/brena-marismas.jpg">
          <div class="txt-container">
            <p class="name">LA BREÑA Y <br> MARISMAS DE BARBATE</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/bahia-cadiz2.jpg">
          <div class="txt-container">
            <p class="name">BAHÍA DE CÁDIZ</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/donana.jpg">
          <div class="txt-container">
            <p class="name">DOÑANA</p>
            <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <div class="button-container">
              <a class="see-event" href="">Conocer espacio natural <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    ';

    static function getTEspaciosnaturales(){
      $espaciosnaturales = PagesTemplates::getFinalTemplate(PagesTemplates::$espaciosnaturales);
      return $espaciosnaturales;
    }

    static $diversion = '
    <!-- HEADER -->
    <div class="header-general header-ocio">
      <div class="header-container">
        <div class="header-txt">
          <h1 class="txt">Diversión</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.jpg">
    </div>
    <div class="section-txt-comarca">
      <!-- NUEVO DIV -->
      <div class="txt-container">
        <p class="title">CREA MOMENTOS
          <br>INOLVIDABLES</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

        <p class="desc">En Cádiz el concepto del tiempo se desploma con la risa de su gente y los planes para disfrutar en todo momento. Atardeceres en la playa, el arte del tapeo en el casco antiguo o perderse en la Sierra de Grazalema, no esperes a que te lo cuenten.</p>
      </div>
    </div>
    <div class="static-structure">
      <div class="page page-compras">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/compras.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/compras.svg">
        <div class="txt-container">

          <p class="name">COMPRAS</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="compras.html">Ver opciones de compras <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/parqueocio-header.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/locales-ocio.svg">
        <div class="txt-container">

          <p class="name">LOCALES DE OCIO</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="locales-ocio.html">Ver locales de ocio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/po-header.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/parques-ocio.svg">
        <div class="txt-container">

          <p class="name">PARQUES DE OCIO</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="parques-ocio.html">Ver parques de ocio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
    </div>';

    static function getTDiversion(){
      $diversion = PagesTemplates::getFinalTemplate(PagesTemplates::$diversion);
      return $diversion;
    }

    static $compras = '
    <!-- HEADER -->
    <div class="header header-compras">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 class="txt" id="natu-via">Compras</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/compras.jpg" alt="">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">EXPERIENCIAS
          <br>PARA TODOS
          <br>LOS SENTIDOS</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

        <p class="desc">El aroma de sus mercados, el color de sus calles, la simpatía y amabilidad de sus gentes, el sabor de sus productos mediterráneos, sentir la brisa y el sol crean un entorno perfecto para realizar tus compras.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-compras">
      <div class="txt-container">

        <p class="title">Mercado Central de Abastos</p>

        <p class="desc">Adéntrate en "La Plaza" y disfruta de las compras de toda la vida en Jerez de la Frontera</p><a class="events-link" href="http://www.jerez.es/webs_municipales/medio_ambiente/consumo/mercados_de_abastos_mercadillos_y_venta_ambulante/mercados_de_abastos/mercado_central_de_abastos/">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
        <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
        <!-- NUEVA FOTO -->
        <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/featured-compras.jpg" alt="">
    </div>
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">3 LUGARES DONDE
          <br>CONSEGUIR LO
          <br>QUE BUSCAS</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
    </div>
    <div class="all-exps" id="exps-playa">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/bahia-sur.jpg">
          <div class="txt-container">

            <p class="name">BAHÍA SUR</p>

            <p class="subtitle">Situado en San Fernando, Cádiz, el Parque Comercial ofrece alimentación, moda y servicios.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://ccbahiasur.com/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/area-sur.jpg">
          <div class="txt-container">

            <p class="name">CC ÁREA SUR</p>

            <p class="subtitle">Área Sur es el&nbsp;destino de Moda&nbsp;de Jerez y de la provincia de Cádiz.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="https://www.ccareasur.com/es/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/puerto-europa.jpg">
          <div class="txt-container">

            <p class="name">PUERTA EUROPA</p>

            <p class="subtitle">Con 80 tiendas y diferentes servicios distribuidos en dos plantas.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="https://ccpuertaeuropa.com/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg" class="fr-fil fr-dib">

          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Fiesta</p>
        </div>
      </div>
    </div>';

    static function getTCompras(){
      $compras = PagesTemplates::getFinalTemplate(PagesTemplates::$compras);
      return $compras;
    }

    static $localesOcio = '
    <!-- HEADER -->
    <div class="header header-locales">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Locales de ocio</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/parqueocio-header.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">VIVE COMO <br> UN GADITANO</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Conoce la provincia a través de los diferentes rincones en los que parar a disfrutar de la vida gaditana.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-locales">
      <div class="txt-container">
        <p class="title">RUTA DE VINOS POR CHICLANA</p>
        <p class="desc">Un plan para todos los sentidos. De lo bueno, lo mejor. </p>
        <a class="events-link" href="rutas.html">Selección de rutas <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-chiclana.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 PLANES QUE <br> SEGURO TE <br> INTERESAN</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/paypay.jpg">
          <div class="txt-container">
            <p class="name name-pay">CAFÉ TEATRO PAY PAY</p>
            <p class="subtitle">Por su escenario pasan desde cantautores a cuentacuentos, música en directo de todo tipo…</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.cafeteatropaypay.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/chicuco.jpg">
          <div class="txt-container">
            <p class="name">EL CHICUCO</p>
            <p class="subtitle">El ultramarinos es un comercio típicamente gaditano. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.elchicuco.com/ ">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/bebo-vientos.jpg">
          <div class="txt-container">
            <p class="name">CHIRINGUITO BEBO LOS VIENTOS</p>
            <p class="subtitle">Espectacular restaurante y bar de copas situado en la mismisima playa de la Victoria. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://www.facebook.com/BeboLosVientos">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>


    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta-grey.svg">
          <p class="also-desc">Fiesta</p>
        </div>
      </div>
    </div>';

    static function getTLocalesOcio(){
      $localesOcio = PagesTemplates::getFinalTemplate(PagesTemplates::$localesOcio);
      return $localesOcio;
    }

    static $parquesOcio = '
    <!-- HEADER -->
    <div class="header header-parques">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Parques de ocio</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/po-header.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">DIVERSIÓN <br> PARA TODOS</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Un sin fin de propuestas hechas para el máximo disfrute, atrévete a conocer la oferta y llévate el mejor recuerdo posible.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-parques">
      <div class="txt-container">
        <p class="title">VISITA EL ZOO DE CASTELLAR</p>
        <p class="desc">Un zoo familiar donde podrás dar de comer, tocar y ver de cerca maravillosas especies.</p>
        <a target="_blank" class="events-link" href="https://www.zoodecastellar.es/">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/ocelote-castellar.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/zoo.jpg">
          <div class="txt-container">
            <p class="name name-bird">ZOO BOTÁNICO DE JEREZ</p>
            <p class="subtitle">El Parque Zoológico y Jardín Botánico de Jerez es uno de los más antiguos de España.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.zoobotanicojerez.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/aqualand.jpg">
          <div class="txt-container">
            <p class="name name-bird">AQUALAND BAHÍA DE CÁDIZ</p>
            <p class="subtitle">Parque acuático situado en el Puerto de Santa María. Adrenalina Fun, Kidzworld, Family fun…</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.aqualand.es/bahiadecadiz/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/circuito.jpg">
          <div class="txt-container">
            <p class="name name-bird">CIRCUITO DE JEREZ</p>
            <p class="subtitle">Un paraíso para los amantes del motociclismo</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.circuitodejerez.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/deporte-grey.svg">
          <p class="also-desc">Deporte</p>
        </div>
      </div>
    </div>';

    static function getTParquesOcio(){
      $parquesOcio = PagesTemplates::getFinalTemplate(PagesTemplates::$parquesOcio);
      return $parquesOcio;
    }

    static $cultura = '
    <!-- HEADER -->
    <div class="header-general header-cultura">
      <div class="header-container">
        <div class="header-txt">
          <h1 class="txt">Cultura</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura.jpg" alt="">
    </div>
    <div class="section-txt-comarca">
      <!-- NUEVO DIV -->
      <div class="txt-container">
        <p class="title">CON MUCHO ARTE</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
        <p class="desc">El viento de levante y los atardeceres de Cádiz han sido testigo del paso de las diferentes civilizaciones por sus municipios. Prepárate para viajar en el tiempo y conoce el patrimonio cultural que ha dejado la esencia de la historia del mundo en la provincia.</p>
      </div>
    </div>
    <div class="static-structure" id="structure-cultura">
      <div class="page-cultura">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/monumento.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/monumento.svg">
        <div class="txt-container">

          <p class="name">MONUMENTOS</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="monumentos.html">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page-cultura">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/flamenco.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/flamenco.svg">
        <div class="txt-container">

          <p class="name">FLAMENCO</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="flamenco.html">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page-cultura">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/flamenco-baile.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/teatro.svg">
        <div class="txt-container">

          <p class="name">TEATRO</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="teatro.html">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page-cultura">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta.svg">
        <div class="txt-container">

          <p class="name">FIESTA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="fiesta.html">Saber más <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
    </div>';

    static function getTCultura(){
      $cultura = PagesTemplates::getFinalTemplate(PagesTemplates::$cultura);
      return $cultura;
    }

    static $monumento = '
    <!-- HEADER -->
    <div class="header header-monumentos">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Monumentos</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/monumentos.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">LA HISTORIA DEL <br> MUNDO PASA <br> POR CÁDIZ</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Castillos, baluartes o teatros son algunos de los muchos monumentos que vas a descubrir en una  provincia repleta de episodios históricos.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-monumentos">
      <div class="txt-container">
        <p class="title">RUTA POR EL CASTILLO DE SAN MARCOS</p>
        <p class="desc">¿Un viaje en el tiempo? Este es el lugar perfecto.</p>
        <a class="events-link" href="rutas.html">Selección de rutas <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/castillo-marcos.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 LUGARES <br> PARA DESCUBRIR <br> HISTORIA</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/castillo-catalina.jpg">
          <div class="txt-container">
            <p class="name name-bird">CASTILLO DE SANTA CATALINA</p>
            <p class="subtitle">El castillo constituye una importante muestra de la arquitectura militar de la Edad Moderna.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="#">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/teatro-romano.jpg">
          <div class="txt-container">
            <p class="name name-bird">TEATRO ROMANO DE CÁDIZ</p>
            <p class="subtitle">El  Teatro Romano de Cádiz se construyó hacia el año 70 a.C. por Lucio Cornelio Balbo.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="#">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/gadir.jpg">
          <div class="txt-container">
            <p class="name name-bird">YACIMIENTO ARQUEOLÓGICO GADIR</p>
            <p class="subtitle">La ciudad de Gadir es uno de los asentamientos fenicios más antiguos de Occidente. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="#">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-grey.svg">
          <p class="also-desc">Cultura</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static function getTMonumento(){
      $monumento = PagesTemplates::getFinalTemplate(PagesTemplates::$monumento);
      return $monumento;
    }

    static $fiesta = '
    <!-- HEADER -->
    <div class="header header-fiesta">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Fiesta</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/fiestaheader.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">EL AIRE DE <br> LA CALLE</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Conoce la variedad de actividades festivas que se celebran en Cádiz durante el año, entre ellas una de las más conocidas a nivel nacional: el Carnaval. </p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-teatro">
      <div class="txt-container">
        <p class="title">CARNAVALES DE CÁDIZ</p>
        <p class="desc">Lo más nuestro, lo más auténtico de Cádiz.</p>
        <a class="events-link" href="#">Ver evento <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/carnavales-header.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/tarifa-night.jpg">
          <div class="txt-container">
            <p class="name name-bird">CAFÉ DEL MAR TARIFA NIGHT CLUB</p>
            <p class="subtitle">Espacio único, gracias a su gran estilo, decoración, ambiente y arquitectura. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.cafedelmartarifa.es/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/babylonia.jpg">
          <div class="txt-container">
            <p class="name name-bird">LA POSADA DE BABYLONIA</p>
            <p class="subtitle">Ideal para salir a bailar los fines de semana, ya que es uno de los locales del paseo marítimo.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.laposadadebabyloniacadiz.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/cafe-levante.jpg">
          <div class="txt-container">
            <p class="name name-bird">CAFÉ DE LEVANTE</p>
            <p class="subtitle">Un lugar imprescindible de Cádiz con su ambiente acogedor y entrañable.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.cafedelevantecadiz.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta-grey.svg">
          <p class="also-desc">Fiesta</p>
        </div>
      </div>
    </div>
    ';

    static function getTFiesta(){
      $fiesta = PagesTemplates::getFinalTemplate(PagesTemplates::$fiesta);
      return $fiesta;
    }

    static $flamenco = '
    <!-- HEADER -->
    <div class="header header-flamenco">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">

          <h1 class="txt" id="natu-via">Flamenco</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/flamencoheader.jpg" alt="">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">TIERRA
          <br>FORJADA
          <br>DE CANTES</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

        <p class="desc">Esta expresión artística es una de las pasiones de la provincia, que vio nacer a muchos de los profesionales más destacados como Camarón de la Isla, Sara Baras o Paco de Lucía.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-flamenco">
      <div class="txt-container">

        <p class="title">EL MEJOR VINO Y EL MEJOR FLAMENCO</p>

        <p class="desc">Nuestras raíces, arte en estado puro que te contagiará.</p><a class="events-link" href="rutas.html">Selección de rutas auténticas <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
        <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
        <!-- NUEVA FOTO -->
        <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/guitarra.jpg" alt="">
    </div>
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">3 IDEAS PENSADAS
          <br>ESPECIALMENTE
          <br>PARA TI</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
    </div>
    <div class="all-exps" id="exps-playa">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/la-cava.jpg">
          <div class="txt-container">

            <p class="name name-bird">LA CAVA</p>

            <p class="subtitle">La Taberna Flamenca La Cava nace como “Tablao flamenco” en 1999.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://www.flamencolacava.com/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/torbellino.jpg">
          <div class="txt-container">

            <p class="name name-bird">EL RINCÓN DE LA TORBELLINO</p>

            <p class="subtitle">El Rincón de la Torbellino&nbsp;es un exitoso&nbsp;tablao flamenco&nbsp;de Cádiz.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://www.elrincondelatorbellino.com/es/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/debla.jpg">
          <div class="txt-container">

            <p class="name name-bird">LA DEBLA</p>

            <p class="subtitle">La Debla se inauguró en 1875 como una bodega para la producción del vino chiclanero.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://www.ladebla.com/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg" class="fr-fil fr-dib">

          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/flamenco-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Flamenco</p>
        </div>
      </div>
    </div>';

    static function getTFlamenco(){
      $flamenco = PagesTemplates::getFinalTemplate(PagesTemplates::$flamenco);
      return $flamenco;
    }

    static $teatro = '
    <!-- HEADER -->
    <div class="header header-teatro">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Teatro</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/teatroheader.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">A RITMO DE <br> CHIRIGOTA</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Los teatros en Cádiz cuentan con una gran tradición e historia como refleja el Teatro Manuel Falla. Escenario de una de las fiestas más importantes de la provincia, el carnaval.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-teatro">
      <div class="txt-container">
        <p class="title">CARNAVALES DE CÁDIZ</p>
        <p class="desc">Lo más nuestro, lo más auténtico de Cádiz.</p>
        <a class="events-link" href="#">Ver evento <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/carnavales-header.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/teatro-falla.jpg">
          <div class="txt-container">
            <p class="name name-bird">TEATRO FALLA</p>
            <p class="subtitle">El Gran Teatro Falla acoge todo tipo de obras relacionadas con las artes escénicas.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.teatrofalla.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/sala-lechera.jpg">
          <div class="txt-container">
            <p class="name name-bird">SALA CENTRAL LECHERA</p>
            <p class="subtitle">Espacio escénico alternativo que acoge todo tipo de representaciones y espectáculos.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://www.facebook.com/centrallechera">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/norica.jpg">
          <div class="txt-container">
            <p class="name name-bird">TEATRO DEL TÍTERE LA TÍA NORICA</p>
            <p class="subtitle">Espacio escénico de Cádiz. Para disfrutar de las Artes Escénicas: teatro, danza, flamenco… </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://www.facebook.com/teatrolatianorica/ ">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/fiesta-grey.svg">
          <p class="also-desc">Fiesta</p>
        </div>
      </div>
    </div>';

    static function getTTeatro(){
      $teatro = PagesTemplates::getFinalTemplate(PagesTemplates::$teatro);
      return $teatro;
    }

    static $gastronomia = '
    <!-- HEADER -->
    <div class="header-general header-cocina">
      <div class="header-container">
        <div class="header-txt">
          <h1 class="txt">Gastronomía</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/cocina.jpg" alt="">
    </div>
    <div class="section-txt-comarca">
      <!-- NUEVO DIV -->
      <div class="txt-container">
        <p class="title">NUESTRA
          <br>GASTRONOMÍA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

        <p class="desc">Los fogones de la gastronomía gaditana contienen una rica variedad de fusiones que hacen de ella un sabor único y especial. Descubre la diversidad de platos que cada rincón de la provincia ofrece para degustar de un sin fin de sabores.</p>
      </div>
    </div>
    <div class="static-structure">
      <div class="page page-compras">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/gourmet.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/gourmet.svg">
        <div class="txt-container">

          <p class="name">GOURMET</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="gourmet.html">Saber más sobre cocina Gourmet <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/vino.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/vino.svg">
        <div class="txt-container">

          <p class="name">EL VINO</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="vino.html">Saber más sobre el vino <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
      <div class="page page-comida">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/comida-tradicional.jpg">
        <img class="icon fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/comida-tradicional.svg">
        <div class="txt-container">

          <p class="name">COMIDA TRADICIONAL</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <a href="comida-tradicional.html">Saber más sobre comida tradicional <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii">&nbsp;</a></div>
      </div>
    </div>';

    static function getTGastronomia(){
      $gastronomia = PagesTemplates::getFinalTemplate(PagesTemplates::$gastronomia);
      return $gastronomia;
    }

    static $comida = '
    <!-- HEADER -->
    <div class="header header-comida">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Comida tradicional</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/comidaheader.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">LOS FOGONES <br> DEL SUR</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Descubre la gran costumbre culinaria gaditana que destaca por su gran tradición marinera, fruto de platos conocidos como los cazones y freidurías de pescado. </p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-comida">
      <div class="txt-container">
        <p class="title">RUTA COMIDA TRADICIONAL</p>
        <p class="desc">Deja que tu paladar se enamore.</p>
        <a class="events-link" href="rutas.html">Selección de rutas <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/comida2.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/tabernita.jpg">
          <div class="txt-container">
            <p class="name name-bird">MINI BAR LA TABERNITA</p>
            <p class="subtitle">Una taberna donde encontrar un servicio excelente y una comida de primera.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://m.facebook.com/RafaTabernita/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/codigo-barra.jpg">
          <div class="txt-container">
            <p class="name name-bird">CÓDIGO DE BARRA</p>
            <p class="subtitle">Tradición y modernidad se cogen de la mano para la elaboración de estos platos. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://www.tripadvisor.es/Restaurant_Review-g187432-d4071583-Reviews-Codigo_de_Barra-Cadiz_Costa_de_la_Luz_Andalucia.html">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/pantalan.jpg">
          <div class="txt-container">
            <p class="name name-bird">PANTALÁN G</p>
            <p class="subtitle">Sencillez y exquisitez crean este restaurante que trae la mejor comida de Cádiz.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://pantalang.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-grey.svg">
          <p class="also-desc">Cultura</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static function getTComida(){
      $comida = PagesTemplates::getFinalTemplate(PagesTemplates::$comida);
      return $comida;
    }

    static $vino = '
    <!-- HEADER -->
    <div class="header header-vino">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">El vino</h1>
          <img class="brush" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt="">
        </div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/vinoheader.jpg">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">TIERRA <br> DE VIÑAS</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
              <p class="desc">Bien es conocido la calidad y la dedicación al vino de la provincia de Cádiz. Diversos son los municipios en los que disfrutar de una  ruta por las bodegas y conocer aún más esta pasión.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="featured-element featured-vino">
      <div class="txt-container">
        <p class="title">CATA DE VINOS EN VEJER DE LA FRONTERA</p>
        <p class="desc">Un plan para todos los sentidos. De lo bueno, lo mejor. </p>
        <a class="events-link" href="rutas.html">Selección de rutas <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
      <!-- NUEVA FOTO -->
      <div class="overlay"></div>
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/cata-vinos.jpg" alt="">
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/osborne.jpg">
          <div class="txt-container">
            <p class="name name-bird">BODEGAS OSBORNE</p>
            <p class="subtitle">Una experiencia única en la que descubrirás los sabores y olores más solemnes de Andalucía.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.bodegas-osborne.com/puerto-de-santa-maria/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/tio-pepe.jpg">
          <div class="txt-container">
            <p class="name name-bird">BODEGAS <br> TÍO PEPE</p>
            <p class="subtitle">Atrévete a descubrir el origen del vino de Jerez y aprender de todos sus secretos. </p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://bodegastiopepe.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="***_preurl_***/storage/app/media/uploaded-files/templates/petronila.jpg">
          <div class="txt-container">
            <p class="name name-bird">LA VIÑA SANTA PETRONILA</p>
            <p class="subtitle">La Viña Santa Petronila está situada en la mejor zona vinícola del Jerez Superior.</p>
            <img class="separator separator-playa" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://santapetronila.com/">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-grey.svg">
          <p class="also-desc">Cultura</p>
        </div>
        <div class="also-feature">
          <img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static function getTVino(){
      $vino = PagesTemplates::getFinalTemplate(PagesTemplates::$vino);
      return $vino;
    }

    static $gourmet = '
    <!-- HEADER -->
    <div class="header header-gourmet">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 class="txt" id="natu-via">Gourmet</h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/gourmetheader.jpg" alt="">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">TERRITORIO
          <br>GOURMET</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

        <p class="desc">La gastronomía de Cádiz cuenta con una oferta Gourmet en productos como el pescado, el queso o la miel que la han convertido en una tendencia culinaria muy apreciada.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-gourmet">
      <div class="txt-container">

        <p class="title">RUTA CULINARIA EN EL PUERTO DE SANTA MARÍA</p>

        <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p><a class="events-link" href="rutas.html">Selección de rutas culinarias <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
        <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
        <!-- NUEVA FOTO -->
        <div class="overlay"></div>
        <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/retinto2.jpg" alt="">
    </div>
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">3 IDEAS PENSADAS
          <br>ESPECIALMENTE
          <br>PARA TI</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
    </div>
    <div class="all-exps" id="exps-playa">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/disparate.jpg">
          <div class="txt-container">

            <p class="name name-bird">DISPARATE</p>

            <p class="subtitle">El restaurante del cocinero José Ruiz Loaiza mezcla cocina tradicional con modernidad.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://disparate.business.site/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/campero.jpg">
          <div class="txt-container">

            <p class="name name-bird">EL CAMPERO</p>

            <p class="subtitle">La cocina de El Campero aúna las recetas más tradicionales de la gastronomía barbateña.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://www.restauranteelcampero.es/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img">
            <br>
          </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/ultramar.jpg">
          <div class="txt-container">

            <p class="name name-bird">ULTRAMAR&amp;NOS</p>

            <p class="subtitle">Espacio moderno, joven, informal y con intenciones de sorprender al cliente.</p><img class="separator separator-playa fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
            <a class="see-event" href="http://www.ultramarynos.com/" target="_blank">Más info <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Cultura</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static function getTGourmet(){
      $gourmet = PagesTemplates::getFinalTemplate(PagesTemplates::$gourmet);
      return $gourmet;
    }
}
