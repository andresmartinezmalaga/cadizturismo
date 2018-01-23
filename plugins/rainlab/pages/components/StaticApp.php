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
        $pages = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pages);
        
        $trducts = collect();
        $types = collect();
        $categories = collect();

        $trducts->put('types',$types);
        $trducts->put('categories',$categories);

        $beaches = $pages->where("is_hidden",0)->where("subtemplate","playas")->values();

        foreach ($beaches as $beach) {
          
            // Type
            if($beach->categoriea == 'urban'){
                
                $grupo = collect();

                $grupo->put('es','Urban');
                $grupo->put('en','Urban');
                $grupo->put('fr','Urban');
                $grupo->put('de','Urban');
                $grupo->put('ru','Urban');

                $types->push($grupo);

            }elseif($beach->categoriea == 'virgen'){

                $grupo = collect();

                $grupo->put('es','Virgen');
                $grupo->put('en','Virgen');
                $grupo->put('fr','Virgen');
                $grupo->put('de','Virgen');
                $grupo->put('ru','Virgen');

                $types->push($grupo);

            }
            
            // Category
            if($beach->categorieb == 'deporte'){

                $grupo = collect();

                $grupo->put('es','Deporte');
                $grupo->put('en','Deporte');
                $grupo->put('fr','Deporte');
                $grupo->put('de','Deporte');
                $grupo->put('ru','Deporte');

                $categories->push($grupo);

            } else if($beach->categorieb == 'naturaleza') {
            
                $grupo = collect();

                $grupo->put('es','Naturaleza');
                $grupo->put('en','Naturaleza');
                $grupo->put('fr','Naturaleza');
                $grupo->put('de','Naturaleza');
                $grupo->put('ru','Naturaleza');

                $categories->push($grupo);

            } else if($beach->categorieb == 'animales') {

                $grupo = collect();

                $grupo->put('es','Animales');
                $grupo->put('en','Animales');
                $grupo->put('fr','Animales');
                $grupo->put('de','Animales');
                $grupo->put('ru','Animales');

                $categories->push($grupo);
                
            } else if($beach->categorieb == 'nudista') {
                
                $grupo = collect();

                $grupo->put('es','Nudista');
                $grupo->put('en','Nudista');
                $grupo->put('fr','Nudista');
                $grupo->put('de','Nudista');
                $grupo->put('ru','Nudista');

                $categories->push($grupo);
                
            } else if($beach->categorieb == 'camping') {
                
                $grupo = collect();

                $grupo->put('es','Camping');
                $grupo->put('en','Camping');
                $grupo->put('fr','Camping');
                $grupo->put('de','Camping');
                $grupo->put('ru','Camping');

                $categories->push($grupo);
                
            } else if($beach->categorieb == 'restauracion') {
                
                $grupo = collect();

                $grupo->put('es','Restauración');
                $grupo->put('en','Restauración');
                $grupo->put('fr','Restauración');
                $grupo->put('de','Restauración');
                $grupo->put('ru','Restauración');

                $categories->push($grupo);

            } else if($beach->categorieb == 'instalaciones') {
                
                $grupo = collect();

                $grupo->put('es','Instalaciones');
                $grupo->put('en','Instalaciones');
                $grupo->put('fr','Instalaciones');
                $grupo->put('de','Instalaciones');
                $grupo->put('ru','Instalaciones');

                $categories->push($grupo);

            }

        }
        
        return compact('beaches','trducts');
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
