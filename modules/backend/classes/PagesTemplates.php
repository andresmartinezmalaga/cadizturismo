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


  static $municipio = '
  <!-- HEADER -->
  <div class="header header-village">
    <div class="header-container header-village-container">
      <div class="header-txt header-txt-village">
        <h1 class="txt"><span class="first-word">Tarifa</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/barbate1.jpg" alt="">
  </div>
  <!-- TXT-->
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">LA CIUDAD DE
        <br>LA ALMADRABA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Situado en la comarca de La Janda, Barbate es un precioso pueblo gaditano que alberga uno de los puertos pesqueros más famosos de Andalucía. A lo largo de los 25 kilómetros de costa que agrupa el término municipal, encontrarás pueblos y pedanías como Zahara de los Atunes, Caños de Meca y Zahora, y en ellos, playas naturales, dunas y acantilados que componen uno de los núcleos turísticos más reconocidos del sur de España.</p>

      <p class="desc">El municipio ofrece la posibilidad de realizar una gran variedad de rutas de gran interés ecológico y paisajístico gracias al Parque Natural de la Breña y las Marismas de Barbate.</p>

      <p class="desc">Las condiciones de pesca que ofrece la zona permiten hacen destacar a su gastronomía por el famoso atún de Almadraba, un manjar único que merece la pena disfrutar en los restaurantes de Barbate.</p>
    </div>
  </div>
  <!-- IMAGEN -->
  <div class="img-village">
    <div class="txt-container">

      <p class="title">Marismas de Barbate</p>

      <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p><a class="events-link" href="rutas.html">Selección de rutas naturales <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-arrow-yellow.svg" alt="" class="fr-fic fr-dii">&nbsp;</a>
      <img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg"></div>
      <!-- NUEVA FOTO -->
      <img class="img-destacada" src="***_preurl_***/storage/app/media/uploaded-files/templates/marismas-barbate.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">EXPERIENCIAS
        <br>EN BARBATE</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non dolor diam. Donec lobortis arcu sem, vitae rhoncus magna rhoncus ut. Proin ut est at est mollis pellentesque eu a sem.</p>
    </div>
  </div>
  <div class="all-exps">
    <div class="all-events-container">
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/atun.jpg">
        <div class="txt-container">

          <p class="name">SEMANA GASTRONÓMICA DEL ATÚN</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">5 días</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Cádiz auténtica</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-events.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Naturaleza</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Gastronomía</p>
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

          <p class="name">VISITA AL FARO DE TRAFALGAR</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">3 horas</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Cádiz auténtica</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Naturaleza</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Ocio</p>
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

          <p class="name">LA BREÑA Y MARISMAS DE BARBATE</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="icons">
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/calendar-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">2 horas</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-event.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Cádiz auténtica</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-events.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Naturaleza</p>
            </div>
            <div class="icon-pair"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ruta-exp.svg" class="fr-fil fr-dib">

              <p class="icon-txt">Ruta</p>
            </div>
          </div>
          <div class="button-container"><a class="see-event" href="#">Ver experiencia <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="icons-row">
    <div class="i-container">
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Naturaleza</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Gastronomía</p>
      </div>
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/ocio.svg" class="fr-fil fr-dib">

        <p class="also-desc">Ocio</p>
      </div>
    </div>
  </div>';

  static function getTMunicipio(){
    $municipio = PagesTemplates::getFinalTemplate(PagesTemplates::$municipio);
    return $municipio;
  }

  
	static $comarca = '
  <!-- HEADER -->
  <div class="header header-comarca">
    <div class="header-container header-village-container">
      <div class="header-txt header-txt-village">
        <h1 class="txt"><span class="first-word">La Janda</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
    </div>
    <!-- NUEVA FOTO -->
    <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/janda2.jpg" alt="">
  </div>
  <div class="section-txt-village">
    <div class="txt-container">

      <p class="title">UN LUGAR
        <br>CON HISTORIA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc"><strong>La comarca de la Janda está situada en la zona central de la provincia de Cádiz y comprende 8 municipios diferentes: Alcalá de los Gazules, Barbate, Benalup-Casas viejas, Conil de la Frontera, Medina Sidonia, Pierna de Rivera, San José del Valle y Vejer de la Frontera.&nbsp;</strong></p>

      <p class="desc">Su localización es envidiable: inmersa entre los <strong>parques naturales</strong> de La Breña y Marismas de Barbate y de Los Alcornocales, y con el mar bañando sus costas. A la belleza del litoral se une además el encanto de la Ruta del Toro, que transcurre por todas sus localidades.</p>

      <p class="desc">Son múltiples sus atractivos turísticos. Podemos optar por el turismo de playa, excelentes para jornadas de sol, baño y relajación. Además de contar con sus vientos de levante, ingrediente imprescindible para la práctica de deportes como el windsurf, con muchos seguidores en la costa y el kitesurf. El fuerte oleaje convierte esta parte del litoral gaditano en un paraíso para los surfistas.</p>

      <p class="desc">La Janda es también perfecta para el turismo rural de interior, más tranquilo e idóneo para realizar múltiples y placenteras actividades de recreo y ocio al aire libre, tales como senderismo, cicloturismo, descenso de cañones, escalada, acampada libre o rutas a caballo.</p>

      <p class="desc">Todo ello sin olvidar su ancestral cultura, su privilegiado entorno natural, su valioso patrimonio, la suculenta gastronomía y el colorido de sus fiestas.</p>
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

      <p class="title">MUNICIPIOS DE
        <br>LA JANDA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

      <p class="desc small-desc">Déjate enamorar por Alcalá de los Gazules, Barbate, Benalup-Casas viejas, Conil de la Frontera, Medina Sidonia, Pierna de Rivera, San José del Valle y Vejer de la Frontera.</p>
    </div>
  </div>
  <div class="all-exps">
    <div class="all-events-container">
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/conil.jpg">
        <div class="txt-container">

          <p class="name">CONIL DE LA FRONTERA</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/barbate1.jpg">
        <div class="txt-container">

          <p class="name">BARBATE</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="municipio.html">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
      </div>
      <div class="event">
        <div class="overlay-img">
          <br>
        </div><img class="rec-img fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/vejer.jpg">
        <div class="txt-container">

          <p class="name">VEJER DE LA FRONTERA</p><img class="separator separator-municipio fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/small-yellow-separator.svg">
          <div class="button-container"><a class="see-event" href="#">Conocer municipio <img src="***_preurl_***/storage/app/media/uploaded-files/templates/link-icon.svg" class="fr-fic fr-dii"></a></div>
        </div>
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
      <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/cultura-grey.svg" class="fr-fil fr-dib">

        <p class="also-desc">Cultura</p>
      </div>
    </div>
  </div>';
    
  static function getTComarca(){
    $comarca = PagesTemplates::getFinalTemplate(PagesTemplates::$comarca);
    return $comarca;
  }


    static $playa = '
    <!-- HEADER -->
    <div class="header header-playa">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 class="txt"><span class="first-word">Los Lances</span></h1><img class="brush fr-fil fr-dib" src="***_preurl_***/storage/app/media/uploaded-files/templates/brush-header.svg" alt=""></div>
      </div>
      <!-- NUEVA FOTO -->
      <img class="background-image" src="***_preurl_***/storage/app/media/uploaded-files/templates/playa-lances.jpg" alt="">
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">

        <p class="title">ARENA FINA,
          <br>WINDSURF Y
          <br>BUENA COMIDA</p><img class="separator fr-fic fr-dii" src="***_preurl_***/storage/app/media/uploaded-files/templates/big-yellow-separator.svg">

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
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/natu-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/deporte-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Deporte</p>
        </div>
        <div class="also-feature"><img src="***_preurl_***/storage/app/media/uploaded-files/templates/gastro-grey.svg" class="fr-fil fr-dib">

          <p class="also-desc">Gastronomía</p>
        </div>
      </div>
    </div>';

    static function getTPlaya(){
      $playa = PagesTemplates::getFinalTemplate(PagesTemplates::$playa);
      return $playa;
    }
	
    static $naturaleza = '
    ';

    static $diversion = '
    ';

    static $cultura = '
    ';

    static $gastronomia = '
    ';
}