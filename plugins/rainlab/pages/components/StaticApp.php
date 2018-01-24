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
