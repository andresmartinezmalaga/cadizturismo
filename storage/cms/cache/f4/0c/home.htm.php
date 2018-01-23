<?php 
class Cms5a6741a0a23ee306521832_5c6293dccb2e5bfcd865d33a55b9970cClass extends \Cms\Classes\PageCode
{
public function onStart()
	{
    $this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}

    $this['experiences'] = $this->staticApp->experienceList();

    $this['translationPage'] = [
      'Playas',
      'que te llenan de luz',
      '138km de playas, calas y ensenadas que invitan a perderse',
      'Conoce nuestras playas',
      'Qué se cuece hoy en Cádiz',
      'Todos los eventos',
      'rutas secretas',
      '¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.',
      'Selección de rutas secretas'
    ];

    $this['translationSearch'] = [
      'día',
      'días',
      'TU ESTANCIA',
      'Playa y gastronomía',
      'Cultura y gastronomía',
      'Fiesta y cultura',
      'Gastronomía y naturaleza',
      'Naturaleza y aventura',
      'Playa y naturaleza',
      'Vino y tradición',
      'Aventura y tradición',
      'INTERESES',
      'Cádiz oculta',
      'Cádiz auténtica',
      'Cádiz relax',
      'Cádiz urbano',
      'TIPO DE VISITA',
      'Ven a Cádiz'
    ];

    if ($this['lang'] == 'en') {

      $this['translationPage'] = [
      'beachs',
      'that fill you with light',
      '138km of beaches, coves and inlets that invite you to get lost',
      'Discover our beaches',
      'What is cooked today in Cádiz',
      'All events',
      'secret routes',
      'Are you strong emotions? Enjoy Cádiz like never before.',
      'Selection of secret routes'
    ];

    $this['translationSearch'] = [
      'day',
      'days',
      'YOUR STAY',
      'Beach and gastronomy',
      'Culture and gastronomy',
      'Party and culture',
      'Gastronomy and nature',
      'Nature and adventure',
      'Beach and nature',
      'Wine and tradition',
      'Adventure and tradition',
      'INTERESTS',
      'Cádiz hidden',
      'Authentic Cádiz',
      'Cadiz relax',
      'Cadiz urban',
      'TYPE OF VISIT',
      'Come to Cádiz'
    ];

    } elseif ($this['lang'] == 'fr') {


    } elseif ($this['lang'] == 'de') {


    } elseif ($this['lang'] == 'ru') {


    }


	}
public function onFindExperience(){

		$days = $_POST['days'];
		$interest = $_POST['interest'];
		$tvisit = $_POST['tvisit'];

      $aLang = App::getLocale();

    	$experiences = $this->staticApp->experienceFind($days,$interest,$tvisit);
      return Redirect::to($aLang.'/experiencias')->with( ['data' => json_encode($experiences)] );
    }
}
