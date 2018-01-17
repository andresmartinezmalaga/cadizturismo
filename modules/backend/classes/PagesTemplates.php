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


  static $municipios = '
	<!-- HEADER -->
    <div class="header header-village">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 class="txt"><span class="first-word">Barbate</span></h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">LA CIUDAD DE <br> LA ALMADRABA</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">Situado en la comarca de La Janda, Barbate es un precioso pueblo gaditano que alberga uno de los puertos pesqueros más famosos de Andalucía. A lo largo de los 25 kilómetros de costa que agrupa el término municipal, encontrarás pueblos y pedanías como Zahara de los Atunes, Caños de Meca y Zahora, y en ellos, playas naturales, dunas y acantilados que componen uno de los núcleos turísticos más reconocidos del sur de España.</p>
              <p class="desc">El municipio ofrece la posibilidad de realizar una gran variedad de rutas de gran interés ecológico y paisajístico gracias al Parque Natural de la Breña y las Marismas de Barbate.</p>
              <p class="desc">Las condiciones de pesca que ofrece la zona permiten hacen destacar a su gastronomía por el famoso atún de Almadraba, un manjar único que merece la pena disfrutar en los restaurantes de Barbate.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="img-village">
      <div class="txt-container">
        <p class="title">Marismas de Barbate</p>
        <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p>
        <a class="events-link" href="rutas.html">Selección de rutas naturales <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">EXPERIENCIAS <br> EN BARBATE</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non dolor diam. Donec lobortis arcu sem, vitae rhoncus magna rhoncus ut. Proin ut est at est mollis pellentesque eu a sem. </p>
      </div>
    </div>
    <div class="all-exps">
      <div class="all-events-container">
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/atun.jpg">
          <div class="txt-container">
            <p class="name">SEMANA GASTRONÓMICA DEL ATÚN</p>
            <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <div class="icons">
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/calendar-exp.svg">
                <p class="icon-txt">5 días</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/cultura-event.svg">
                <p class="icon-txt">Cádiz auténtica</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/natu-events.svg">
                <p class="icon-txt">Naturaleza</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-exp.svg">
                <p class="icon-txt">Gastronomía</p>
              </div>
            </div>
            <div class="button-container">
              <a class="see-event" href="#">Ver experiencia <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/faro.jpg">
          <div class="txt-container">
            <p class="name">VISITA AL FARO DE TRAFALGAR</p>
            <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <div class="icons">
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/calendar-exp.svg">
                <p class="icon-txt">3 horas</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/cultura-event.svg">
                <p class="icon-txt">Cádiz auténtica</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/cultura-event.svg">
                <p class="icon-txt">Naturaleza</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/ocio-exp.svg">
                <p class="icon-txt">Ocio</p>
              </div>
            </div>
            <div class="button-container">
              <a class="see-event" href="#">Ver experiencia <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/brena.jpg">
          <div class="txt-container">
            <p class="name">LA BREÑA Y MARISMAS DE BARBATE</p>
            <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <div class="icons">
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/calendar-exp.svg">
                <p class="icon-txt">2 horas</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/cultura-event.svg">
                <p class="icon-txt">Cádiz auténtica</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/natu-events.svg">
                <p class="icon-txt">Naturaleza</p>
              </div>
              <div class="icon-pair">
                <img src="**url**/plugins/rainlab/pages/assets/svg/ruta-exp.svg">
                <p class="icon-txt">Ruta</p>
              </div>
            </div>
            <div class="button-container">
              <a class="see-event" href="#">Ver experiencia <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
      </div>
    </div>';

  
	static $comarcas = '
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
    $comarcas = PagesTemplates::getFinalTemplate(PagesTemplates::$comarcas);
    return $comarcas;
  }


    static $playas = '<!-- HEADER -->
    <div class="header header-playa">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 class="txt"><span class="first-word">Los Lances</span></h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">ARENA FINA, <br> WINDSURF Y <br> BUENA COMIDA</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">Situado en la comarca de La Janda, Barbate es un precioso pueblo gaditano que alberga uno de los puertos pesqueros más famosos de Andalucía. A lo largo de los 25 kilómetros de costa que agrupa el término municipal, encontrarás pueblos y pedanías como Zahara de los Atunes, Caños de Meca y Zahora, y en ellos, playas naturales, dunas y acantilados que componen uno de los núcleos turísticos más reconocidos del sur de España.</p>
              <p class="desc">El municipio ofrece la posibilidad de realizar una gran variedad de rutas de gran interés ecológico y paisajístico gracias al Parque Natural de la Breña y las Marismas de Barbate.</p>
              <p class="desc">Las condiciones de pesca que ofrece la zona permiten hacen destacar a su gastronomía por el famoso atún de Almadraba, un manjar único que merece la pena disfrutar en los restaurantes de Barbate.</p>
      </div>
    </div>

    <!-- IMAGEN -->
    <div class="img-village">
      <div class="txt-container">
        <p class="title">Marismas de Barbate</p>
        <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p>
        <a class="events-link" href="#playas">Selección de rutas naturales <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>

    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 COSAS QUE <br> HACER EN LA PLAYA <br> DE LOS LANCES</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>

    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/kite.jpg">
          <div class="txt-container">
            <p class="name">3 SIXTY KITE SCHOOL</p>
            <p class="subtitle">Utilizamos el método IKO y todos los instructores están certificados en IKO de nivel 3.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a class="see-event" href="#">Saber más <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/arte-vida.jpg">
          <div class="txt-container">
            <p class="name">ARTE Y VIDA TARIFA</p>
            <p class="subtitle">Lugar ideal para el descanso, y disfrutar de nuestras terrazas, restaurante o zonas chill out.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a class="see-event" href="#">Saber más <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/camping.jpg">
          <div class="txt-container">
            <p class="name">CAMPING TORRE DE LA PEÑA</p>
            <p class="subtitle">Camping, Bungalows y Restaurante en Tarifa con un pesacado de primera.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a class="see-event" href="#">Saber más <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/deporte-grey.svg">
          <p class="also-desc">Deporte</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
      </div>
    </div>';
	
    static $naturaleza = '
    <!-- HEADER -->
    <div id="#ruta-viaverde" class="header header-viaverde">
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Vía Verde de la Sierra</h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">EL ENCANTO <br> DE LA RUTA</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">La ruta de Vía Verde de la Sierra es una ruta natural que atraviesa una antigua estructura ferroviaria en desuso reconvertida ahora en trayecto turístico. Una enriquecedora excursión por plena naturaleza a través de las sierras Béticas andaluzas.</p>
              <p class="desc">La ruta se inicia en la antigua estación del municipio de Olvera, bajo la estampa de su histórico castillo, y finaliza en la antigua estación de Puerto Serrano, en la vega del río Guadalete. Una travesía de 36km de entorno natural con 30 túneles que atravesar, 4 viaductos que cruzar y 5 estaciones para descansar que transcurre paralela a las orillas de numerosos ríos. </p>
              <p class="desc">Encontrarás también una amplia oferta de actividades deportivas, educativas, turísticas y medioambientales. Como la sede de la Fundación Vía Verde de la Sierra, hoteles restaurante, espacio para autocaravanas, y el destacado Centro de Interpretación y Observatorio ornitológico, donde aprenderás todo lo que necesitas saber sobre la Vía Verde de la Sierra a través de soportes interactivos y proyecciones en 4D. </p>
              <p class="desc">Disfruta de diferentes actividades al aire libre a través de este completo trayecto que podrás realizar a pie, en bici o a caballo. </p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-viaverde">
      <div class="txt-container">
        <p class="title">GARGANTA VERDE</p>
        <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p>
        <a class="events-link" href="rutas.html">Selección de rutas naturales <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">DISFRUTA LA <br> VÍA VERDE <br> DE LA MANO DE...</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/adventour.jpg">
          <div class="txt-container">
            <p class="name">ADVENTOUR</p>
            <p class="subtitle">Empresa de turismo, deporte, aventura y animación con sede en Olvera.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.adventour.es/">Ver rutas que ofrece <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/sierra-viva.jpg">
          <div class="txt-container">
            <p class="name">SIERRA VIVA</p>
            <p class="subtitle">Empresa con gran variedad de rutas adaptadas a practicar deporte al aire libre.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.sierraviva.es/">Ver rutas que ofrece <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/coripe.jpg">
          <div class="txt-container">
            <p class="name">CORIPE RURAL</p>
            <p class="subtitle">Una de las empresas pioneras y con más experiencia en actividades medioambientales.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.coriperural.es/">Ver rutas que ofrece <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/natu-grey.svg">
          <p class="also-desc">Naturaleza</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/deporte-grey.svg">
          <p class="also-desc">Deporte</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';

    static $diversion = '
    <!-- HEADER -->
    <div class="header header-compras">      
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Compras</h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">EXPERIENCIAS <br> PARA TODOS <br> LOS SENTIDOS</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">El aroma de sus mercados, el color de sus calles, la simpatía y amabilidad de sus gentes, el sabor de sus productos mediterráneos, sentir la brisa y el sol crean un entorno perfecto para realizar tus compras.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-compras">
      <div class="txt-container">
        <p class="title">Mercado Central de Abastos</p>
        <p class="desc">Adéntrate en "La Plaza" y disfruta de las compras de toda la vida en Jerez de la Frontera</p>
        <a class="events-link" href="http://www.jerez.es/webs_municipales/medio_ambiente/consumo/mercados_de_abastos_mercadillos_y_venta_ambulante/mercados_de_abastos/mercado_central_de_abastos/">Saber más <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 LUGARES DONDE <br> CONSEGUIR LO <br>QUE BUSCAS</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/bahia-sur.jpg">
          <div class="txt-container">
            <p class="name">BAHÍA SUR</p>
            <p class="subtitle">Situado en San Fernando, Cádiz, el Parque Comercial ofrece alimentación, moda y servicios.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://ccbahiasur.com/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/area-sur.jpg">
          <div class="txt-container">
            <p class="name">CC ÁREA SUR</p>
            <p class="subtitle">Área Sur es el destino de Moda de Jerez y de la provincia de Cádiz.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://www.ccareasur.com/es/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/puerto-europa.jpg">
          <div class="txt-container">
            <p class="name">PUERTA EUROPA</p>
            <p class="subtitle">Con 80 tiendas y diferentes servicios distribuidos en dos plantas. </p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="https://ccpuertaeuropa.com/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/fiesta-grey.svg">
          <p class="also-desc">Fiesta</p>
        </div>
      </div>
    </div>';

    static $cultura = '
    <!-- HEADER -->
    <div class="header header-flamenco">      
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Flamenco</h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">TIERRA <br> FORJADA <br> DE CANTES</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">Esta expresión artística es una de las pasiones de la provincia, que vio nacer a muchos de los profesionales más destacados como Camarón de la Isla, Sara Baras o Paco de Lucía.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-flamenco">
      <div class="txt-container">
        <p class="title">EL MEJOR VINO Y EL MEJOR FLAMENCO</p>
        <p class="desc">Nuestras raíces, arte en estado puro que te contagiará.</p>
        <a class="events-link" href="rutas.html">Selección de rutas auténticas <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/la-cava.jpg">
          <div class="txt-container">
            <p class="name name-bird">LA CAVA</p>
            <p class="subtitle">La Taberna Flamenca La Cava nace como “Tablao flamenco” en 1999.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.flamencolacava.com/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/torbellino.jpg">
          <div class="txt-container">
            <p class="name name-bird">EL RINCÓN DE LA TORBELLINO</p>
            <p class="subtitle">El Rincón de la Torbellino es un exitoso tablao flamenco de Cádiz.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.elrincondelatorbellino.com/es/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/debla.jpg">
          <div class="txt-container">
            <p class="name name-bird">LA DEBLA</p>
            <p class="subtitle">La Debla se inauguró en 1875 como una bodega para la producción del vino chiclanero. </p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.ladebla.com/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/ocio.svg">
          <p class="also-desc">Ocio</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/flamenco-grey.svg">
          <p class="also-desc">Flamenco</p>
        </div>
      </div>
    </div>';

    static $gastronomia = '
    <!-- HEADER -->
    <div class="header header-gourmet">      
      <div class="header-container header-village-container">
        <div class="header-txt header-txt-village">
          <h1 id="natu-via" class="txt">Gourmet</h1>
          <img class="brush" src="**url**/plugins/rainlab/pages/assets/svg/brush-header.svg" alt="">
        </div>
      </div>
    </div>
    <!-- TXT-->
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">TERRITORIO <br> GOURMET</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
              <p class="desc">La gastronomía de Cádiz cuenta con una oferta Gourmet en productos como el pescado, el queso o la miel que la han convertido en una tendencia culinaria muy apreciada.</p>
      </div>
    </div>
    <!-- IMAGEN -->
    <div class="featured-element featured-gourmet">
      <div class="txt-container">
        <p class="title">RUTA CULINARIA EN EL PUERTO DE SANTA MARÍA</p>
        <p class="desc">¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.</p>
        <a class="events-link" href="rutas.html">Selección de rutas culinarias <img src="**url**/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg" alt=""> </a>
        <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div class="section-txt-village">
      <div class="txt-container">
              <p class="title">3 IDEAS PENSADAS <br> ESPECIALMENTE <br> PARA TI</p>
              <img class="separator" src="**url**/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg">
      </div>
    </div>
    <div id="exps-playa" class="all-exps">
      <div class="all-events-container">
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/disparate.jpg">
          <div class="txt-container">
            <p class="name name-bird">DISPARATE</p>
            <p class="subtitle">El restaurante del cocinero José Ruiz Loaiza mezcla cocina tradicional con modernidad.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://disparate.business.site/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/campero.jpg">
          <div class="txt-container">
            <p class="name name-bird">EL CAMPERO</p>
            <p class="subtitle">La cocina de El Campero aúna las recetas más tradicionales de la gastronomía barbateña.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.restauranteelcampero.es/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
        <div class="event event-playa">
          <div class="overlay-img"></div>
          <img class="rec-img" src="**url**/plugins/rainlab/pages/assets/img/ultramar.jpg">
          <div class="txt-container">
            <p class="name name-bird">ULTRAMAR&NOS</p>
            <p class="subtitle">Espacio moderno, joven, informal y con intenciones de sorprender al cliente.</p>
            <img class="separator separator-playa" src="**url**/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg">
            <a target="_blank" class="see-event" href="http://www.ultramarynos.com/">Más info <img src="**url**/plugins/rainlab/pages/assets/svg/link-icon.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-row">
      <div class="i-container">
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/gastro-grey.svg">
          <p class="also-desc">Gastronomía</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/cultura-grey.svg">
          <p class="also-desc">Cultura</p>
        </div>
        <div class="also-feature">
          <img src="**url**/plugins/rainlab/pages/assets/svg/ruta-grey.svg">
          <p class="also-desc">Ruta</p>
        </div>
      </div>
    </div>';
}