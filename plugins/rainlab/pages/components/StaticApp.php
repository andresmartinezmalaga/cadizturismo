<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\MenuItemReference;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Request;
use Url;
use DateTime;

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
        'semana_santa' => 'Semana Santa',
        'carnaval' => 'Carnaval',
        'congresos' => 'Congresos',
        'cultura' => 'Cultura',
        'danza' => 'Danza',
        'deporte' => 'Deporte',
        'espectaculos' => 'Espectáculos',
        'exposiciones' => 'Exposiciones',
        'ferias' => 'Ferias',
        'fiesta' => 'Fiesta',
        'flamenco' => 'Flamenco',
        'gastronomia' => 'Gastronomía',
        'naturaleza' => 'Naturaleza',
        'navidad' => 'Navidad',
        'ocio' => 'Ocio',
        'romerias' => 'Romerías',
        'ruta' => 'Ruta',
        'taller' => 'Taller',
        'teatro' => 'Teatro'
      ];
    }

    public function getMunicipalities(){
        return [
         'alcala de los gazules' => 'Alcalá de los Gazules',
         'alcala del valle' => 'Alcalá del Valle',
         'algar' => 'Algar',
         'algeciras' => 'Algeciras',
         'algodonales' => 'Algodonales',
         'arcos de la frontera' => 'Arcos de la Frontera',
         'barbate' => 'Barbate',
         'benalup-casas viejas' => 'Benalup-Casas Viejas',
         'benaocaz' => 'Benaocaz',
         'bornos' => 'Bornos',
         'cadiz' => 'Cádiz',
         'castellar de la frontera' => 'Castellar de la Frontera',
         'chiclana de la frontera' => 'Chiclana de la Frontera',
         'chipiona' => 'Chipiona',
         'conil de la frontera' => 'Conil de la Frontera',
         'el bosque' => 'El Bosque',
         'el gastor' => 'El Gastor',
         'el puerto de santa maria' => 'El Puerto de Santa María',
         'espera' => 'Espera',
         'grazalema' => 'Grazalema',
         'jerez de la frontera' => 'Jerez de la Frontera',
         'jimena de la frontera' => 'Jimena de la Frontera',
         'la linea de la concepcion' => 'La Línea de la Concepción',
         'los barrios' => 'Los Barrios',
         'medina sidonia' => 'Medina Sidonia',
         'olvera' => 'Olvera',
         'paterna de rivera' => 'Paterna de Rivera',
         'prado del rey' => 'Prado del Rey',
         'puerto real' => 'Puerto Real',
         'puerto serrano' => 'Puerto Serrano',
         'rota' => 'Rota',
         'san fernando' => 'San Fernando',
         'san jose del valle' => 'San José del Valle',
         'sanlucar de barrameda' => 'Sanlúcar de Barrameda',
         'san roque' => 'San Roque',
         'setenil de las bodegas' => 'Setenil de las Bodegas',
         'tarifa' => 'Tarifa',
         'torre alhaquime' => 'Torre Alháquime',
         'trebujena' => 'Trebujena',
         'ubrique' => 'Ubrique',
         'vejer de la frontera' => 'Vejer de la Frontera',
         'villaluenga del rosario' => 'Villaluenga del Rosario',
         'villamartin' => 'Villamartín',
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
