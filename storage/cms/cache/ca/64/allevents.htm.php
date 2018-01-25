<?php 
class Cms5a69bf70bd6dd341028011_1c0c4584409b370b08955087d6a14dd7Class extends \Cms\Classes\PartialCode
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
