<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\MenuItemReference;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Request;
use Url;
use DateTime;
use Carbon\Carbon;
use Carbon\CarbonInterval;

use Barryvdh\Snappy\Facades\SnappyPdf as PDFS;

use Mail;

use Response;
use File;
use Twig;

/**
 * The static page component.
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class StaticApp extends ComponentBase
{


    /**
     * @var \RainLab\Pages\Classes\Page A reference to the static page object
     */

    public function componentDetails()
    {
        return [
            'name'        => 'StaticApp',
            'description' => 'StaticApp description'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    // sort ok
    public function getEventsCategories(){
      return [
           'carnaval' => 'Carnaval',
           'congresos' => 'Congresos',
           'cultura' => 'Cultura',
           'danza' => 'Danza',
           'deporte' => 'Deporte',
           'espectáculos' => 'Espectáculos',
           'exposiciones' => 'Exposiciones',
           'ferias' => 'Ferias',
           'fiesta' => 'Fiesta',
           'flamenco' => 'Flamenco',
           'gastronomía' => 'Gastronomía',
           'naturaleza' => 'Naturaleza',
           'navidad' => 'Navidad',
           'ocio' => 'Ocio',
           'romerías' => 'Romerías',
           'ruta' => 'Ruta',
           'semana santa' => 'Semana Santa',
           'taller' => 'Taller',
           'teatro' => 'Teatro'
      ];
    }

    // sort ok
    public function getRutasCategories(){
      return [
           'cultura' => 'Cultura',
           'deporte' => 'Deporte',
           'gastronomía' => 'Gastronomía',
           'naturaleza' => 'Naturaleza',
           'ocio' => 'Ocio',
      ];
    }

    // sort ok
    public function getMunicipalities(){
        return [
        'alcalá de los gazules' => 'Alcalá de los Gazules',
        'alcalá del valle' => 'Alcalá del Valle',
        'algar' => 'Algar',
        'algeciras' => 'Algeciras',
        'algodonales' => 'Algodonales',
        'arcos de la frontera' => 'Arcos de la Frontera',
        'barbate' => 'Barbate',
        'benalup-casas viejas' => 'Benalup-Casas Viejas',
        'benaocaz' => 'Benaocaz',
        'bornos' => 'Bornos',
        'cádiz' => 'Cádiz',
        'castellar de la frontera' => 'Castellar de la Frontera',
        'chiclana de la frontera' => 'Chiclana de la Frontera',
        'chipiona' => 'Chipiona',
        'conil de la frontera' => 'Conil de la Frontera',
        'el bosque' => 'El Bosque',
        'el gastor' => 'El Gastor',
        'el puerto de santa maría' => 'El Puerto de Santa María',
        'espera' => 'Espera',
        'grazalema' => 'Grazalema',
        'jerez de la frontera' => 'Jerez de la Frontera',
        'jimena de la frontera' => 'Jimena de la Frontera',
        'la línea de la concepción' => 'La Línea de la Concepción',
        'los barrios' => 'Los Barrios',
        'medina sidonia' => 'Medina Sidonia',
        'olvera' => 'Olvera',
        'paterna de rivera' => 'Paterna de Rivera',
        'prado del rey' => 'Prado del Rey',
        'puerto real' => 'Puerto Real',
        'puerto serrano' => 'Puerto Serrano',
        'rota' => 'Rota',
        'san fernando' => 'San Fernando',
        'san josé del valle' => 'San José del Valle',
        'sanlúcar de barrameda' => 'Sanlúcar de Barrameda',
        'san roque' => 'San Roque',
        'setenil de las bodegas' => 'Setenil de las Bodegas',
        'tarifa' => 'Tarifa',
        'torre alháquime' => 'Torre Alháquime',
        'trebujena' => 'Trebujena',
        'ubrique' => 'Ubrique',
        'vejer de la frontera' => 'Vejer de la Frontera',
        'villaluenga del rosario' => 'Villaluenga del Rosario',
        'villamartín' => 'Villamartín',
        'zahara de la sierra' => 'Zahara de la Sierra',
        ];
    }

    public function beachList()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $beaches = $pages->where("is_hidden",0)->where("subtemplate","playas")->values();

        return $beaches;
    }

    public function beachFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $ruta = $pages->where("is_hidden",0)->where("url",$url)->values();

        return $ruta;
    }

    public function eventAll()
    {

        $now = Carbon::now()->format('Y-m-d');

        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $eventsVip = $pages->where("is_hidden",0)->where("template","eventos")->where('is_top',1)->values();
        $eventsNormal = $pages->where("is_hidden",0)->where("template","eventos")->where('is_top',0)->values();

        $resultVip = collect();
        $resultNormal = collect();

        $events = collect();

        $count = 0;

        foreach ($eventsVip as $event) {

            if( (new DateTime($event->date_end))->format('Y-m-d') > $now && $count < 7){
                $resultVip->push($event);
                $count = $count+1;

            } elseif( (new DateTime($event->date_end))->format('Y-m-d') > $now && $count > 6){
                $resultNormal->push($event);
                $count = $count+1;
            }

        }

        foreach ($eventsNormal as $event) {

            if( (new DateTime($event->date_end))->format('Y-m-d') > $now){
                $resultNormal->push($event);
                $count = $count+1;
            }
        }

        foreach ($resultVip as  $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $event->date = (new DateTime($event->date_start));
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty_day = (new DateTime($event->date_start))->format('d');
            $event->date_start_pretty_month = $mesString[($mes)];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_start_pretty_numf = (new DateTime($event->date_start))->format('d/m');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');

        }

        $eventsVipOrder = $resultVip->sortBy('date');

        foreach ($resultNormal as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $event->date = (new DateTime($event->date_start));
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty_day = (new DateTime($event->date_start))->format('d');
            $event->date_start_pretty_month = $mesString[($mes)];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_start_pretty_numf = (new DateTime($event->date_start))->format('d/m');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');

        }

        $eventsNormalOrder = $resultNormal->sortBy('date');

        foreach ($eventsVipOrder as $event) {
           $events->push($event);
        }

        foreach ($eventsNormalOrder as $event) {
           $events->push($event);
        }

        return $events;
    }

    public function rutaAll()
    {

        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $rutasVip = $pages->where("is_hidden",0)->where("template","rutas")->where('is_top',1)->values();
        $rutasNormal = $pages->where("is_hidden",0)->where("template","rutas")->where('is_top',0)->values();

        $resultVip = collect();
        $resultNormal = collect();

        $rutas = collect();

        $count = 0;

        foreach ($rutasVip as $ruta) {

            if( $count < 7){
                $resultVip->push($ruta);
                $count = $count+1;

            } elseif( $count > 6){
                $resultNormal->push($ruta);
                $count = $count+1;
            }

        }

        foreach ($rutasNormal as $ruta) {

            $resultNormal->push($ruta);
            $count = $count+1;

        }


        foreach ($resultVip as $ruta) {
           $rutas->push($ruta);
        }

        foreach ($resultNormal as $ruta) {
           $rutas->push($ruta);
        }

        return $rutas;
    }

    public function eventFind($category, $date_start, $date_end, $location)
    {
        
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $events =  new \Illuminate\Support\Collection($pages);

        $validEvents = collect();

        $preEvents = $events->where("is_hidden",0)->where('template','eventos')->where('category',$category)->where('location',$location)->values();


        foreach ($preEvents as $i) {

            $eventDateStart = (new DateTime($i->date_start))->format('d-m-Y');
            $eventDateEnd = (new DateTime($i->date_end))->format('d-m-Y');

            $bs = new Carbon($date_start);
            $es = new Carbon($eventDateStart);

            $be = new Carbon($date_end);
            $ee = new Carbon($eventDateEnd);

            $diffStart = $bs->diffInDays($es,false);
            $diffStartEnd = $bs->diffInDays($ee,false);
            
            $diffEnd = $be->diffInDays($ee,false);
            $diffEndStart = $be->diffInDays($es,false);

            if($diffStart>=0  && $diffEnd<1 ) {
            
                $validEvents->push($i);
           
            } elseif ($diffStartEnd >= 0 && $diffStart <= 0){

                $validEvents->push($i);
           
            } elseif ($diffEndStart <= 0 && $diffEnd >=0 ){

                $validEvents->push($i);
            }

        }

        return $validEvents->values();

    }

    public function eventFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $event = $pages->where("is_hidden",0)->where("url",$url)->values();


        $event[0]->date_start_pretty_num = (new DateTime($event[0]->date_start))->format('d.m.y');
        $event[0]->date_end_pretty_num = (new DateTime($event[0]->date_end))->format('d.m.y');

        return $event;
    }

    public function rutaFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $ruta = $pages->where("is_hidden",0)->where("url",$url)->values();

        return $ruta;
    }

    public function eventList()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $events = $pages->where("is_hidden",0)->where("template","eventos");

        foreach ($events as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty = $event->date_start_ppretty.' '.$mesString[$mes];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');
        }

        return $events;

    }


    public function municipalitiesList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","municipios")->sortBy('title')->values();

        return $result;
    }

    public function municipalityByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","municipios")->where('url', '/municipios/'.$name)->values();

        return $result;
    }

    public function regionsList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where('url', 'like','%/comarcas/%')->values();

        return $result;
    }

    public function regionByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where('url', '/comarcas/'.$name)->values();

        return $result;
    }

    public function beachByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","playas")->where('url', '/playas/'.$name)->values();

        return $result;
    }

    public function experienceList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $experiences =  new \Illuminate\Support\Collection($pages);

        $result = $experiences->where("is_hidden",0)->where("template","experiences");

        return $result;
    }

    public function experienceFind($days,$interest,$tvisit)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $experiences =  new \Illuminate\Support\Collection($pages);


        $result = $experiences->where("is_hidden",0)->where('template','experiences')->where('days',$days)->where('interest',$interest)->where('tvisit',$tvisit)->values();

        return $result;
    }

    public function rutaFind($category, $days, $location)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $rutas =  new \Illuminate\Support\Collection($pages);


        $result = $rutas->where("is_hidden",0)->where('template','rutas')->where('category',$category)->where('days',$days)->where('location',$location)->values();

        return $result;
    }

    public function experienceFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $event = $pages->where("is_hidden",0)->where("url",$url)->values();

        //$event[0]->date_start_pretty_num = (new DateTime($event[0]->date_start))->format('d.m.y');
        //$event[0]->date_end_pretty_num = (new DateTime($event[0]->date_end))->format('d.m.y');

        return $event;
    }

    public function sendMailExperience($mail, $url) {

        $contactName ='Cadiz Turismo';
        $sendContact ='noreply@cadizturismo.es';
        $sendTo =  $mail;

        $experience = $this->experienceFindByUrl($url);

        $baseHtml = '
        <meta charset="utf-8"/>


        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="http://cadizturismo.jekyllme.com/plugins/rainlab/pages/assets/css/style-event.css"/>
        <style>

          .background-image {
            position: absolute !important;
            width: 100%;
            object-fit: cover !important;
            object-position: center !important;
            height: 700px !important;
            text-align: center !important;
          }

        .header-txt, .txt, .header-container {
          text-align: center !important;
          font-size: 100px !important;
          font-weight: 500;
          text-transform: uppercase;
        }

        .header-event {
          text-align: center !important;
          height: 700px;
        }

          .brush {
            display: none !important;
          }
                .section-txt, .section-img, .header-event {
                    display:block!important;
                    border: solid 1px white!important;

                }

                .section-txt {
                  padding-top: 80px !important;
                  padding-bottom: 40px !important;
                }

                .section-txt .txt-container .desc {
                    display: block!important;
                    font-size: 18px !important;
                    line-height: 30px !important;
                    margin-bottom: 20px !important;
               }

                .section-txt .txt-container .title {
                    display: block!important;
                    font-size: 46px !important;
                    font-weight: 700 !important;
                    line-height: 50px !important;
                    margin-bottom: 10px !important;
               }

                .section-txt .big-number-container, .section-txt .txt-container, .section-txt .big-number-container span, .section-txt .txt-container p {
                    display: inline-block!important;
                }

                .section-txt .big-number-container {
                    display: none !important;
                }

                .section-txt .txt-container {
                    margin: 20px 0px !important;
                    width: 100% !important;
                    max-width: none !important;
                }

                .event-features::after {
                  content: none !important;
                }

                .event-features {
                  background-color: black !important;
                  display: inline-block !important;
                  text-align: center !important;
                }

                .event-features .feature-exp {
                  display: inline-block !important;
                  margin-top: 50px !important;
                }

                .section-txt .txt-container .municipios {
                  margin-top: 50px !important;
                }

                .section-txt .txt-container .municipios a  {
                  margin-top: 10px !important;
                  margin-bottom: 0px !important;
                }

                .section-txt .txt-container .municipios img  {
                  display: none !important;
                }

        </style>
        ';

        $preexperiencemarkup = $baseHtml.$experience[0]['markup'];

        $preexperiencemarkup2 = str_replace('.svg', '.png', $preexperiencemarkup);

        $preexperiencemarkup3 = str_replace('</p>', '</p><br/><br/>', $preexperiencemarkup2);

        $experiencemarkup = str_replace('/storage/', 'http://cadizturismo.jekyllme.com/storage/', $preexperiencemarkup3);


        $data = array('experiencemarkup' => $experiencemarkup );

        $pdf_data = PDFS::loadHTML($experiencemarkup)


            ->setPaper('a4')
            ->output();

        $dataexperience = $experience[0];

        $dataemail = array('experience' => $dataexperience);

        Mail::send('rainlab.pages::mail.experience', $dataemail, function($message) use ($pdf_data, $contactName, $sendContact, $sendTo)
        {
            $message->from($sendContact, $contactName);
            $message->to($sendTo);
            $message->subject('Tu experiencia en Cadiz Turismo');
            $message->attachData($pdf_data, 'Experience.pdf');

        });
    }

    public function publicationList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publications =  new \Illuminate\Support\Collection($pages);

        $result = $publications->where("is_hidden",0)->where("subtemplate","publicaciones")->values();

        return $result;
    }
    
    public function publicationListCount(){
        return count($this->publicationList());
    }

    public function publicationListPag($pag = 1, $number = 1)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publications =  new \Illuminate\Support\Collection($pages);

        $result = $publications->where("is_hidden",0)->where("subtemplate","publicaciones")->values();

        $pagination = $result->slice((($pag-1)*$number),$number);

        return $pagination;
    }



    public function newList($idm)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $news =  new \Illuminate\Support\Collection($pages);

        $result = $news->where("is_hidden",0)->where("subtemplate","sala-prensa-prensa")->where("idioma",$idm)->values();

        return $result;
    }

    public function newListCount($idm){
        return count($this->newList($idm));
    }

    public function newListPag($idm, $pag = 1, $number = 1)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $news =  new \Illuminate\Support\Collection($pages);

        $result = $news->where("is_hidden",0)->where("subtemplate","sala-prensa-prensa")->where("idioma",$idm)->values();

        $pagination = $result->slice((($pag-1)*$number),$number);

        return $pagination;
    }


    public function reportList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $reports =  new \Illuminate\Support\Collection($pages);

        $result = $reports->where("is_hidden",0)->where("subtemplate","sala-prensa-reportajes")->values();

        return $result;
    }

    public function reportListCount(){
        return count($this->reportList());
    }

    public function reportListPag($pag = 1, $number = 1)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $reports =  new \Illuminate\Support\Collection($pages);

        $result = $reports->where("is_hidden",0)->where("subtemplate","sala-prensa-reportajes")->values();

        $pagination = $result->slice((($pag-1)*$number),$number);

        return $pagination;
    }

}
