<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Framework - HTML Email Fluid Grid Layout</title>
    <style type="text/css">

     
      @font-face {
        font-family: 'AvenirNext-Medium';
        src: url("{{resource_path('views/pdf/fonts/')}}avenirnext/AvenirNext-Medium.eot");
        src: url("{{resource_path('views/pdf/fonts/')}}avenirnext/AvenirNext-Medium.eot?#iefix") format("embedded-opentype"),
        url("{{resource_path('views/pdf/fonts/')}}avenirnext/AvenirNext-Medium.woff") format("woff"),
        url("{{resource_path('views/pdf/fonts/')}}avenirnext/AvenirNext-Medium.ttf") format("truetype");
        font-weight: normal;
        font-style: normal; }

      @font-face {
        font-family: Ryssa;
        src: url("{{resource_path('views/pdf/fonts/')}}ryssa/RissaTypeface.eot");
        src: url("{{resource_path('views/pdf/fonts/')}}ryssa/RissaTypeface.eot?#iefix") format("embedded-opentype"),
        url("{{resource_path('views/pdf/fonts/')}}ryssa/RissaTypeface.woff") format("woff"),
        url("{{resource_path('views/pdf/fonts/')}}ryssa/RissaTypeface.ttf") format("truetype");
        font-weight: normal;
        font-style: normal; }


        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a, p { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-size: 10px; font-family: 'AvenirNext-Medium'; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }

        /* RESET STYLES */
        img { border: 0; line-height: 100%; outline: none; text-decoration: none; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

        a {
            display: block;
        }

        .all-element {
            font-family: Tahoma, "Helvetica Neue" ,Helvetica, Arial, sans-serif;;
            font-size: 14px;
            margin: auto;
            text-align: center;
            height: 100%;
            width: 100%;
        }

        .whole-container {
          width: 100%;
          height: 100%;
        }

        .logo {
            height: 600px;
            position: relative;
            margin: 0px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .logo-container {
            height: 600px;
            position: relative;
            margin: 0px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .logo h1 {
          font-size: 150px;
          transform: rotate(-9deg);
          line.height: 80px;
          color: white;
          font-family: Ryssa;
          max-width: 90%;
          margin: 0 auto;
          font-weight: 300;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .panel
        {
            width: 600px;
            background-color: white;
        }

        .hello {
          font-size: 15px;
          color: #9B9B9B;
          width: 90%;
          line-height: 28px;
        }

        .panel-icons
        {
          width: 600px;
          background-color: black;
                }

        .panel img {
            margin-top: 43px;
            margin-bottom: 36px;
        }

        .img-container img {
            margin: 77px auto;
        }

        .section-title {
          font-size: 49px;
          line-height: 55px;
          font-weight: 500;
          width: 90%;
        }

         .ask {
            color: #CECECE;
            font-size: 12px;
            position: relative;
        }

        .ask a {
            color: #CECECE;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
        }

        a.button-yellow {
            text-decoration: none;
            background-color: #EC9815;
            padding: 14px 0px;
            color: #FFFFFF;
            text-transform: uppercase;
            font-family: Tahoma, "Helvetica Neue" ,Helvetica, Arial, sans-serif;
            font-weight: 500;
            border-radius: 2px;
            width: 326px;
            margin: auto;
        }

        .social {
            color: #464D65;
            margin-bottom: 20px;
        }

        .social img {
            margin-right: 5px;
            margin-bottom: 5px;
        }

        .social a{
            display: inline-block;
        }

        .leftie {
          width: 100px;
        }
        .big-number {
          font-size: 280px;
          color: #CECECE;
          font-family: Ryssa;
          margin-top: 0px;
          text-align: center;
          transform: rotate(-9deg);
        }
        .rightie {
          width: 320px;
        }

        .tag {
          color: #FFFFFF;
          font-size: 16px;
          text-align: center;
          margin-top: 5px;
          margin-bottom: 0px;
        }

        .icons-row td {
          display: table-cell;
          vertical-align: middle;
          max-width: 180px;
        }

        .second-icons-row td, .second-icons-row td img, .second-icons-row td p {
          display: inline-block;
          text-align: left;
        }

        .icons-row td img {
          height: 39px;
        }

        .second-icons-row td p {
         color: #4A4A4A;
         font-size: 16px;
         margin-left: 5px;
         margin-top: 0px;
         margin-bottom: 0px;
         margin-right: 60px;
        }

    </style>
</head>
<body>
<center>
    <div class="all-element">
        <div class="whole-container" style=" margin: auto;">
            <!--[if mso]>
            <table role="presentation" width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                <tr>
                    <td>
            <![endif]-->

            <!--/storage/app/media/uploaded-files/templates/-->
            <table role="main-img" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="left" valign="center">

                        <table role="logo" width="660" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                              <!-- AQUÍ ESTÁ LA IMAGEN DE PORTADA -->
                                <td class="logo-container" align="center" valign="top" style="background-image: url('http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/magia-palmar.jpg')">
                                    <div class="logo" style="display: table-cell; vertical-align: middle;">
                                      <!-- TÍTULO DE LA EXPERIENCIA -->
                                      <h1>{{$data['experience'][0]['viewBag']['cover']}}</h1>
                                      <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/brush.png" alt="" style="width: auto; height: auto;">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

            <table class="panel-icons" role="panel" width="640" height="180px" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="center" valign="top" style="height: 100%;">
                        <!-- ICONOS EXPERIENCIA -->
                        <table role="panel" cellspacing="0" cellpadding="0" border="0" align="left" style="width:58%; height: 100%; margin: 0 auto; float: none;">
                            <tr class="icons-row" style="height: 100%;">
                                <td width="200" align="center" valign="top">
                                  <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/calendar.png">
                                  <p class="tag">{{$data['experience'][0]['viewBag']['days']}} días</p>
                                </td>
                                
                                <td width="200" align="center" valign="top">
                                  <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/{{str_slug(interest1)}}.png" alt="">
                                  <p class="tag">{{$data['interest1']}}</p>
                                </td>
                                <td width="200" align="center" valign="top">
                                  <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/{{str_slug(interest2)}}.png" alt="">
                                  <p class="tag">{{$data['interest2']}}</p>
                                </td>
                                <td width="200" align="center" valign="top">
                                  <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/{{str_slug($data['experience'][0]['viewBag']['tvisit'])}}.png" alt="">
                                  <p class="tag">{{$data['experience'][0]['viewBag']['tvisit']}}</p> interest
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

            <table class="panel panel-table" role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" valign="top">

                        <table role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td width="420" class="leftie" align="left" valign="top" style="padding:83px 0px 77px 0px; color: #3C3C3B;">
                                  <!-- NÚMERO -->
                                    <p class="big-number" style="margin-bottom: 2px;">1</p>
                                </td>
                                <td width="220" class="rightie" align="left" valign="top" style="padding:44px 0px 77px 0px; color: #3C3C3B;">
                                      <!-- CONTENIDO -->
                                      <h2 class="section-title" style="margin-bottom: 2px;">LA MAGIA DE EL PALMAR</h2>
                                      <p class="hello">Si buscas conocer las auténticas playas de Cádiz, tienes una visita obligada a la zona de El Palmar. Situada en la costa del municipio de Vejer de la Frontera, dentro de la comarca de la Janda, encontrarás en el Palmar una kilométrica playa de aguas atlánticas que no te dejará indiferente.</p>
                                      <p class="hello">Alrededor de una dehesa de palmeras se abre una enorme playa virgen a lo largo de 8km. Si eres de los que huyen de de las masificaciones y los macrocomplejos, y antepones lo natural a las comodidades que ofrecen los grandes resorts ubicados en otras costas, no puedes perderte este  espectáculo visual: playas que conservan su atractivo más puro y natural.</p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table role="main-img" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="left" valign="center">

                        <table role="logo" width="660" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td align="center" valign="top">
                                    <div class="logo">
                                      <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/palmar2.jpg" alt="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table class="panel panel-table" role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" valign="top">

                        <table role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td width="420" class="leftie" align="left" valign="top" style="padding:83px 0px 77px 0px; color: #3C3C3B;">
                                    <p class="big-number" style="margin-bottom: 2px;">2</p>
                                </td>
                                <td width="220" class="rightie" align="left" valign="top" style="padding:44px 0px 77px 0px; color: #3C3C3B;">
                                      <h2 class="section-title" style="margin-bottom: 2px;">SURF</h2>
                                      <p class="hello">La situación geográfica del Palmar está condicionada por una gran variedad de vientos, y esto contribuye a que sus playas se consideren como el spot de surf mas consistente de toda la costa andaluza. La calidad de sus olas de derechas e izquierdas, su gran cantidad de picos repartidos por toda la playa y unas condiciones climatológicas inmejorables, hacen el lugar ideal para todo surfista.</p>
                                      <p class="hello">De mayo a octubre se dan las condiciones más adecuadas: viento del Este y olas de mediana estatura que forman tubos y aseguran la diversión a los expertos de este deporte.</p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table role="main-img" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="left" valign="center">

                        <table role="logo" width="660" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td align="center" valign="top">
                                    <div class="logo">
                                      <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/palmar3.jpg" alt="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table class="panel panel-table" role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" valign="top">

                        <table role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td width="420" class="leftie" align="left" valign="top" style="padding:83px 0px 77px 0px; color: #3C3C3B;">
                                    <p class="big-number" style="margin-bottom: 2px;">3</p>
                                </td>
                                <td width="220" class="rightie" align="left" valign="top" style="padding:44px 0px 77px 0px; color: #3C3C3B;">
                                      <h2 class="section-title" style="margin-bottom: 2px;">ATMÓSFERA DE DESCONEXIÓN</h2>
                                      <p class="hello">En los meses de verano, un recopilado de chiringuitos se han instalado a pie de playa para asegurar a los visitantes ambientes chill donde disfrutar entre familia y amigos de la magia del Palmar. Tardes de baños y espectaculares puesta de sol que podrás acompañar con música en directo, mojitos y un ambiente más alternativo que te envolverán en esta atmósfera única.</p>
                                      <p class="hello">La gran afluencia turística de los últimos años no impide que la playa del Palmar haya dejado de presumir de su infinita tranquilidad. Hablamos de kilómetros de playa versátil, donde encontrarás un ambiente más alternativo y juvenil en la zona céntrica, o kilómetros a los extremos donde sumergirte en una fusión de pureza y paz en cualquier época del año.</p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table role="main-img" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="left" valign="center">

                        <table role="logo" width="660" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td align="center" valign="top">
                                    <div class="logo">
                                      <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/palmar4.jpg" alt="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table class="panel panel-table" role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" valign="top">

                        <table role="panel" width="640" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td width="420" class="leftie" align="left" valign="top" style="padding:83px 0px 77px 0px; color: #3C3C3B;">
                                    <p class="big-number" style="margin-bottom: 2px;">4</p>
                                </td>
                                <td width="220" class="rightie" align="left" valign="top" style="padding:44px 0px 77px 0px; color: #3C3C3B;">
                                      <h2 class="section-title" style="margin-bottom: 2px;">LOS VECINOS</h2>
                                      <p class="hello">Aún tienes más por descubrir, porque los vecinos de El Palmar también tienen mucho para sorprenderte. En los kilómetros colindantes encontrarás otras zonas con mucho encanto que no querrás perderte:</p>
                                      <p class="hello"><b>Conil</b>: famoso por sus playas, gastronomía y ambiente nocturno, se eleva sobre la llanura de el Palmar. Un pintoresco pueblo marinero de calles estrechas y casas blancas. Destacamos su famosa calle del Peñón, repleta de bares y pubs donde disfrutar del pescaíto frito de la zona. </p>
                                      <p class="hello"><b>Las Calas de Roche</b>: Los acantilados que unen las costas de Chiclana y Conil atesoran un grupo de calas bellísimas, de arena fina y dorada, resguardadas del Levante. </p>
                                      <p class="hello">Desde la carretera pasan desapercibidas y eso las hacen aún más especiales. Para llegar a ellas, antes deberás atravesar mediante pasarelas de madera un bosquecillo de matorrales y enebros marítimos único en Europa, para después bajar por escaleras de piedra que surgen entre las rocas de los acantilados hasta alcanzar la arena.</p>
                                      <p class="hello"><b>Zahora</b>: al otro extremo encontrarás esta pedanía casi anecdótica que pertenece al municipio de Barbate. Se encuentra en el Cabo de Trafalgar, donde se levanta su magestuoso Faro de Trafalgar y recoge playas como la del Sajorami o la playa de Mangueta. Un pequeño pueblo con encanto que se divide entre playas espectaculares con dunas en las que perderte y una pequeña urbanización que suele crecer en verano. </p>
                                      <table role="panel" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%; height: 100%; margin: 50px auto 0px auto;">
                                          <tr class="second-icons-row" style="height: 100%;">
                                              
                                          </tr>
                                      </table>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <table role="main-img" width="640" cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%;">
                <tr>
                    <td align="left" valign="center">

                        <table role="logo" width="660" cellspacing="0" cellpadding="0" border="0" align="left" style="width:100%;">
                            <tr>
                                <td align="center" valign="top">
                                    <div class="logo">
                                      <img src="http://cadizturismo.jekyllme.com/storage/app/media/uploaded-files/templates/palmar5.jpg" alt="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>
    </div>


</center>
</body>
</html>
