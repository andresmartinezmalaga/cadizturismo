<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;
use RainLab\Pages\Components\StaticApp;

class CadizTurismoController extends ControllerBase
{
	public function __construct() 
    {
    	 $this->StaticApp = new StaticApp; 
    }

	public function municipalitiesList()
    {    	
    	$municipalitiesList =  $this->StaticApp->getMunicipalities();
    	return new JsonResponse(['data'=>$municipalitiesList], 200);
    }

    public function municipalityByName($name){
    	$slugname = str_slug($name);
    	$municipality = $this->StaticApp->municipalityByName($slugname);
    	return new JsonResponse(['data'=>$municipality], 200);
    }
   
    public function regionByName($name){
    	$slugname = str_slug($name);
    	$region = $this->StaticApp->regionByName($slugname);
    	return new JsonResponse(['data'=>$region], 200);
    }

    public function beachByName($name){
    	$slugname = str_slug($name);
    	$beach = $this->StaticApp->beachByName($slugname);
    	return new JsonResponse(['data'=>$beach], 200);
    }

    public function rutaFind($category, $days, $location){
    	
    	$lowCategory = strtolower($category);
    	$lowDays = strtolower($days);
    	$lowLocation = strtolower($location);

    	$ruta = $this->StaticApp->rutaFind($lowCategory, $lowDays, $lowLocation);
    	return new JsonResponse(['data'=>$ruta], 200);
    }

    // date format : 07-02-2018
    public function eventFind($category, $date_start, $date_end, $location){
    	
    	echo $date_start;
        dd(1);

    	$lowCategory = strtolower($category);
    	$lowLocation = strtolower($location);

    	$event = $this->StaticApp->rutaFind($lowCategory, $date_start, $date_end, $lowLocation);
    	return new JsonResponse(['data'=>$event], 200);
    }


    

}