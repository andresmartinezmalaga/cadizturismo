<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\MenuItemReference;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Request;
use Url;

/**
 * The static page component.
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class StaticExperience extends ComponentBase
{
    

    /**
     * @var \RainLab\Pages\Classes\Page A reference to the static page object
     */
  
    public function componentDetails()
    {
        return [
            'name'        => 'StaticExperience',
            'description' => 'StaticExperience description'
        ];
    }
    
    public function defineProperties()
    {
        return [
        ];
    }

    public function experienceList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $events =  new \Illuminate\Support\Collection($pages);
        
        $result = $events->where("template","experiences");
        
        return $result;
    }

    public function experienceFind($days,$interest,$tvisit)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $events =  new \Illuminate\Support\Collection($pages);
        
       
        $result = $events->where('template','experiences')->where('days',$days)->where('interest',$interest)->where('tvisit',$tvisit);
       
        return $result;
    }

   
}
