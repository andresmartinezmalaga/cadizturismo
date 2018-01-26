<?php 
class Cms5a6997d4a64b2313974294_6743dd4d17ed86e95d66bb30d18e7ce6Class extends \Cms\Classes\PartialCode
>>>>>>> 491ada266dd4d7718bcf5c9702c800d83ff94f0c:storage/cms/cache/d7/be/allevents.htm.php
{
public function onStart()
	{
	 	if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
	      	$this['preurl'] = '/cadizturismo';
	    } else {
	     	$this['preurl'] = '';
	    }
	}
}
