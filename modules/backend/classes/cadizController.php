<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;
use Plugins\Rainlab\Pages\Components\StaticApp;

class CadizController extends ControllerBase
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