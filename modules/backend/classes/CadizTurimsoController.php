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

	public function municipiosList()
    {
    	$mnps =  $this->StaticApp->getMunicipalities();
    	return new JsonResponse(['data'=>$mnps], 200);
    }
}