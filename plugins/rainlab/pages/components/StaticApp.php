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

    public function getEventsCategories(){
      return [
           'semana santa' => 'Semana Santa',
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
           'taller' => 'Taller',
           'teatro' => 'Teatro'
      ];
    }

    public function getRutasCategories(){
      return [           
           'cultura' => 'Cultura',
           'deporte' => 'Deporte',
           'gastronomía' => 'Gastronomía',
           'naturaleza' => 'Naturaleza',         
           'ocio' => 'Ocio',         
      ];
    }

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

            if( (new DateTime($event->date_start))->format('Y-m-d') > $now && $count < 7){
                $resultVip->push($event);
                $count = $count+1;
            
            } elseif( (new DateTime($event->date_start))->format('Y-m-d') > $now && $count > 6){
                $resultNormal->push($event);
                $count = $count+1;
            }

        }

        foreach ($eventsNormal as $event) {
     
            if( (new DateTime($event->date_start))->format('Y-m-d') > $now){
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
            $diffEnd = $be->diffInDays($ee,false);

          
           if($diffStart>=0  && $diffEnd<1 ) {
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
        $events =  new \Illuminate\Support\Collection($pages);
        
        $result = $events->where("is_hidden",0)->where("subtemplate","municipios")->values();
        
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="google-site-verification" content="KZtyPnD_0KXDnRTpmvwxNoBcvj3Osx_VKrXoJaucHrE" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="http://cadizturismo.jekyllme.com/plugins/rainlab/pages/assets/css/style-comarcas.css"/>
        <link rel="stylesheet" href="http://cadizturismo.jekyllme.com/plugins/rainlab/pages/assets/css/style-village.css"/>
        <link rel="stylesheet" href="http://cadizturismo.jekyllme.com/plugins/rainlab/pages/assets/css/style-event.css"/>
        <link rel="stylesheet" href="http://cadizturismo.jekyllme.com/plugins/rainlab/pages/assets/css/style.css"/> ';
        
        $preexperiencemarkup = $baseHtml.$experience[0]['markup'];
        
        $preexperiencemarkup2 = str_replace('.svg', '.png', $preexperiencemarkup);
        
        $experiencemarkup = str_replace('/storage/', 'http://cadizturismo.jekyllme.com/storage/', $preexperiencemarkup2);

        //dd(1);

        /*$interest1 = explode(' y ', $experience )[0];
        $interest2 = explode(' y ', $experience )[1];*/

        $data = array('experiencemarkup' => $experiencemarkup );
       
        
        //$pdf = PDFS::loadView('pdf.experience', compact('data'))->setOption('page-size', 'A4')->setOption('dpi',300);
        //$pdf_data = $pdf->output();
        
        //$pdf = PDFS::generateFromHtml($experiencemarkup,  '/tmp/experience3.pdf');
        //
        //$pdf = PDFS::generate('http://google.com', '/tmp/experience343.pdf');

        //$pdf_data = $pdf;
        //
        
        // Load the template
        //$template = File::get(themes_path('default/content/static-pages/pdftest.htm'));

        // Render the template
        //$renderedHtml = Twig::parse($template);


         // Render as a PDF
        /*$pdf_data = PDFS::loadHTML($renderedHtml)
            ->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0)
            ->setPaper('letter')
            ->output();*/


        /*return Response::make($pdf, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => "filename.pdf",
        ]);*/
               
        //$renderedHtml = Twig::parse($template);
        //
        //
        //
        
        //$nombre = 'Andres';
        //$template = '<h1>Hola</h1>';
        //$renderedHtml = Twig::parse($template);
        
        $pdf_data = PDFS::loadHTML($experiencemarkup)
            ->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0)
            ->setOption('dpi',300)
            ->setOption('orientation','Landscape')
            ->setPaper('a4')
            ->output();

        //$pdf_data = PDFS::getOutput('http://cadizturismo.jekyllme.com/es/experiencias/cinco');
        
        $experience = 'experiencia';

        $dataemail = array('experience' => 'experience');

        Mail::send('mails.experience', $dataemail, function($message) use ($pdf_data, $contactName, $sendContact, $sendTo)
        {   

            $message->from($sendContact, $contactName);
            $message->to($sendTo);
            $message->attachData($pdf_data, 'experience.pdf');
            $message->subject('Tu experiencia en Cadiz Turismo');

        });



    }


   
}
