<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;

class CadizController extends ControllerBase
{
	public function municipiosList()
    {
    	//
    	return new JsonResponse(['data'=>'HOLA'], 200);
    }
}