<?php 
class Cms5a685a71720f6436983834_c553535d2b05d12111ab6ac60d683550Class extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    }
 
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
}
