<?php namespace Backend\Controllers;

use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;

class Auth extends Controller
{
	public function municipiosList()
    {
    	return new JsonResponse(['data'=>'HOLA'], 200);
    }
}