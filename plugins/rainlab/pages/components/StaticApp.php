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

        $now = Carbon::now();

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

            if( (new DateTime($event->date_start)) > $now && $count < 7){
                $resultVip->push($event);
                $count = $count+1;
            
            } elseif( (new DateTime($event->date_start)) > $now && $count > 6){
                $resultNormal->push($event);
                $count = $count+1;
            }

        }

        foreach ($eventsNormal as $event) {

            if($count < 7){
                if( (new DateTime($event->date_start)) > $now){
                    $resultVip->push($event);
                    $count = $count+1;
                }
                
            } else {
                if( (new DateTime($event->date_start)) > $now){
                    $resultNormal->push($event);
                    $count = $count+1;
                }
            }
        }
            
        foreach ($resultVip as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty_day = $event->date_start_ppretty;
            $event->date_start_pretty_month = $mesString[$mes];
            $events->push($event);
        }

        $resultNormalOrder = $resultNormal;
        
        foreach ($resultNormal as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty_day = $event->date_start_ppretty;
            $event->date_start_pretty_month = $mesString[$mes];
            $events->push($event);
        }

        return $events;
    }

    public function eventFind()
    {

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
        }

        return $events;

    } 

    public function event3List()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);
        
        $events = $pages->where("is_hidden",0)->where("template","eventos")->take(3);

        foreach ($events as $event) {         
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty = $event->date_start_ppretty.' '.$mesString[$mes];
        }

        return $events;

    } 

    public function eventVipList()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);
        
        $fevents = $pages->where("is_hidden",0)->where("template","eventos")->take(7);
        $events = $fevents->slice(4,count($fevents));
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
        $events =  new \Illuminate\Support\Collection($pages);
        
        $result = $events->where("is_hidden",0)->where("template","experiences");
        
        return $result;
    }

    public function experienceFind($days,$interest,$tvisit)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $events =  new \Illuminate\Support\Collection($pages);
        
       
        $result = $events->where("is_hidden",0)->where('template','experiences')->where('days',$days)->where('interest',$interest)->where('tvisit',$tvisit)->values();
       
        return $result;
    }

   
}
