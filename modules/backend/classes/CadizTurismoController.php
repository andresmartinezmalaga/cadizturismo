<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;
use RainLab\Pages\Components\StaticApp;
use Date;
use RainLab\Pages\Classes\Experience;

use RainLab\Translate\Classes\MLCmsObject;

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
    	return new JsonResponse(['data'=>$municipalitiesList], 200);
    }

    public function municipalityByName($name){
    	$slugname = str_slug($name);
    	$municipality = $this->StaticApp->municipalityByName($slugname);
    	return new JsonResponse(['data'=>$municipality], 200);
    }
   
   	public function regionsIndex()
    {    	
    	$regionsList =  $this->StaticApp->regionsList();
    	return new JsonResponse(['data'=>$regionsList], 200);
    }

    public function regionByName($name){
    	$slugname = str_slug($name);
    	$region = $this->StaticApp->regionByName($slugname);
    	$locale = 'en';
    	MLCmsObject::findLocale($locale, $region)
    	return new JsonResponse(['data'=>$region], 200);
    }

    public function beachesIndex()
    {    	
    	$beachesIndex =  $this->StaticApp->beachesList();
    	return new JsonResponse(['data'=>$beachesIndex], 200);
    }

    public function beachByName($name){
    	$slugname = str_slug($name);
    	$beach = $this->StaticApp->beachByName($slugname);
    	return new JsonResponse(['data'=>$beach], 200);
    }

    public function rutasIndex()
    {    	
    	$rutasList =  $this->StaticApp->rutasList();
    	return new JsonResponse(['data'=>$rutasList], 200);
    }

    public function rutasCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getRutasCategories()],200);
    }

    public function rutaFind($category, $days, $location){
    	
    	$lowCategory = strtolower($category);
    	$lowDays = strtolower($days);
    	$lowLocation = strtolower($location);

    	$ruta = $this->StaticApp->rutaFind($lowCategory, $lowDays, $lowLocation);
    	return new JsonResponse(['data'=>$ruta], 200);
    }

    public function eventsCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getEventsCategories()],200);
    }

    public function eventsIndex()
    {    	
    	$eventsList =  $this->StaticApp->eventAll();
    	return new JsonResponse(['data'=>$eventsList], 200);
    }

    // date format : 07-02-2018
    public function eventFind($category, $date_start, $date_end, $location){
    	
    	$daystart = (new Date($date_start))->format('d-m-Y');
    	$dayend = (new Date($date_end))->format('d-m-Y');

    	$lowCategory = strtolower($category);
    	$lowLocation = strtolower($location);

    	$event = $this->StaticApp->eventFind($lowCategory, $daystart, $dayend, $lowLocation);
    	return new JsonResponse(['data'=>$event], 200);
    }


   

    public function experienceFind($days,$interest,$tvisit) {

    	$lowInterest = strtolower($interest);
    	$lowTvisit = strtolower($tvisit);

    	$experience = $this->StaticApp->experienceFind($days,$lowInterest,$lowTvisit);
    	return new JsonResponse(['data'=>$experience], 200);
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
                $espacios_naturales->push($value);
            } else {
            	$naturaleza->push($value);
            }
    	}

    	$naturaleza_grupo->put('naturaleza',$naturaleza);
    	$naturaleza_grupo->put('espacios_naturales',$espacios_naturales);
    	
    	$iPages = $this->StaticApp->staticsFindByUrl('/diversion');
    	$diversion->push($iPages);

		$iPages = $this->StaticApp->staticsFindByUrl('/cultura');
    	$cultura->push($iPages);

    	$iPages = $this->StaticApp->staticsFindByUrl('/gastronomia');
    	$gastronomia->push($iPages);

    	$result->put('naturaleza',$naturaleza_grupo);
    	$result->put('diversion',$diversion[0]);
    	$result->put('cultura',$cultura[0]);
    	$result->put('gastronomia',$gastronomia[0]);

    	// /naturaleza /naturaleza/via-verde /naturaleza/birdwatching /naturaleza/espacios-naturales la-brena-y-marismas-de-barbate
    	// /diversion
    	// /cultura 
    	
    	return new JsonResponse(['data'=>$result], 200);
    }
    

}