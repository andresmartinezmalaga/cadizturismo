<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;
use RainLab\Pages\Components\StaticApp;
use Date;
use RainLab\Pages\Classes\Experience;

use RainLab\Translate\Classes\MLCmsObject;
use Cms\Classes\Theme;
use Config;

class CadizTurismoController extends ControllerBase
{
	public function __construct() 
    {
    	 $this->StaticApp = new StaticApp; 
    	 $this->Experience = new Experience;
    }

	public function municipalitiesList()
    {    	
    	$municipalitiesList =  $this->StaticApp->getMunicipalities();
    	return new JsonResponse(['data'=>$municipalitiesList], 200);
    }

    public function municipalitiesIndex()
    {    	
    	$municipalitiesList =  $this->StaticApp->municipalitiesList();

    	$mlPages = $this->createObjectPagesMultl($municipalitiesList);
    	
    	return new JsonResponse(['data'=>$mlPages], 200);

    }

    public function municipalityByName($name){
    	
    	$slugname = str_slug($name);
    	$municipality = $this->StaticApp->municipalityByName($slugname);
    	
    	$mlPages = $this->createObjectPagesMultl($municipality);
    	
    	return new JsonResponse(['data'=>$mlPages], 200);
    }

   
   	public function regionsIndex()
    {    	
    	$regionsList =  $this->StaticApp->regionsList();
    	
    	$mlPages = $this->createObjectPagesMultl($regionsList);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function regionByName($name){
    	
    	$slugname = str_slug($name);
    	$region = $this->StaticApp->regionByName($slugname);

    	$mlPages = $this->createObjectPagesMultl($region);

    	return new JsonResponse(['data'=>$mlPages], 200);    	
    	
    }

    public function beachesIndex()
    {    	
    	$beachesIndex =  $this->StaticApp->beachesList();
    	
    	$mlPages = $this->createObjectPagesMultl($beachesIndex);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function beachByName($name){
    	$slugname = str_slug($name);
    	$beach = $this->StaticApp->beachByName($slugname);
    	
    	$mlPages = $this->createObjectPagesMultl($beach);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function rutasIndex()
    {    	
    	$rutasList =  $this->StaticApp->rutasList();
    	
    	$mlPages = $this->createObjectPagesMultl($rutasList);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function rutasCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getRutasCategories()],200);
    }

    public function rutaFind($category, $days, $location){
    	
    	$lowCategory = strtolower($category);
    	$lowDays = strtolower($days);
    	$lowLocation = strtolower($location);

    	$ruta = $this->StaticApp->rutaFind($lowCategory, $lowDays, $lowLocation);
    	
    	$mlPages = $this->createObjectPagesMultl($ruta);

		return new JsonResponse(['data'=>$mlPages], 200);   
    }

    public function eventsCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getEventsCategories()],200);
    }

    public function eventsIndex()
    {    	
    	$eventsList =  $this->StaticApp->eventAll();
    	
    	$mlPages = $this->createObjectPagesMultl($eventsList);

		return new JsonResponse(['data'=>$mlPages], 200);    
    	
    }

    // date format : 07-02-2018
    public function eventFind($category, $date_start, $date_end, $location){
    	
    	$daystart = (new Date($date_start))->format('d-m-Y');
    	$dayend = (new Date($date_end))->format('d-m-Y');

    	$lowCategory = strtolower($category);
    	$lowLocation = strtolower($location);

    	$event = $this->StaticApp->eventFind($lowCategory, $daystart, $dayend, $lowLocation);
    	
    	$mlPages = $this->createObjectPagesMultl($event);

		return new JsonResponse(['data'=>$mlPages], 200);    

    }

    public function experienceFind($days,$interest,$tvisit) {

    	$lowInterest = strtolower($interest);
    	$lowTvisit = strtolower($tvisit);

    	$experience = $this->StaticApp->experienceFind($days,$lowInterest,$lowTvisit);

    	$mlPages = $this->createObjectPagesMultl($experience);

		return new JsonResponse(['data'=>$mlPages], 200);   
    }


    public function experienceInterests(){

    	return new JsonResponse(['data'=> $this->Experience->getInterestsOptions()],200);
    }

    public function experienceTVisit(){

    	return new JsonResponse(['data'=> $this->Experience->getVisitsOptions()],200);
    }

    public function statics() {

    	$result = collect();
    	$naturaleza_grupo = collect();
    	$naturaleza = collect();
    	$espacios_naturales = collect();
    	$diversion = collect();
    	$cultura = collect();
    	$gastronomia = collect();

    	$iPages = $this->StaticApp->staticsFindByUrl('/naturaleza');
    	foreach ($iPages as $value) {
    		if (strpos($value->url, '/naturaleza/espacios-naturales') !== false) {
                echo json_encode($value);
                dd(1);
                $mlPages = $this->createObjectPagesMultl($value);
                $espacios_naturales->push($mlPages);
            } else {
            	$mlPages = $this->createObjectPagesMultl($value);
            	$naturaleza->push($mlPages);
            }
    	}

    	$naturaleza_grupo->put('naturaleza',$naturaleza);
    	$naturaleza_grupo->put('espacios_naturales',$espacios_naturales);
    	
    	$iPages = $this->StaticApp->staticsFindByUrl('/diversion');
    	$mlPages = $this->createObjectPagesMultl($iPages);
    	$diversion->push($mlPages);

		$iPages = $this->StaticApp->staticsFindByUrl('/cultura');
		$mlPages = $this->createObjectPagesMultl($iPages);
    	$cultura->push($mlPages);

    	$iPages = $this->StaticApp->staticsFindByUrl('/gastronomia');
    	$mlPages = $this->createObjectPagesMultl($iPages);
    	$gastronomia->push($mlPages);

    	$result->put('naturaleza',$naturaleza_grupo);
    	$result->put('diversion',$diversion[0]);
    	$result->put('cultura',$cultura[0]);
    	$result->put('gastronomia',$gastronomia[0]);

    	return new JsonResponse(['data'=>$result], 200);
    }


    public function createObjectPagesMultl($pages){

    	$result = collect();

    	foreach ($pages as $iPage) {

    		$pagesML = collect();
    		
    		if(isset($iPage->title)){
    			$result->put(str_slug($iPage->title),$pagesML);
    		} elseif(isset($iPage->url)) {
    			$result->put(str_slug($iPage->url),$pagesML);
    		} else{
    			$result->push($pagesML);
    		}

    		if(isset($iPage->markup)) {
    			$markupFullUrl = str_replace('/storage/',config('app.urlApp').'storage/',$iPage->markup);
    			$pagesML->put('es',['markup'=>$markupFullUrl,'viewBag'=>$iPage->viewBag]);
			}   		
    		
    		if(isset($iPage->localeUrl)){

	    		foreach ($iPage->localeUrl as $key => $value) {
	    			
	    			$locale = $key;
	    			$iPage->theme = Theme::getActiveTheme();
	    			$imlPage = MLCmsObject::findLocale($locale, $iPage);
	    			$markupFullUrl = '';
	    			if(isset($imlPage->markup)){
		    			$markupFullUrl = str_replace('/storage/',config('app.urlApp').'storage/',$imlPage->markup);
	    			}
		    		$pagesML->put($key,['markup'=>$markupFullUrl]);
	    		}   
	    	}

    	}
    	return $result;
    }
    

}