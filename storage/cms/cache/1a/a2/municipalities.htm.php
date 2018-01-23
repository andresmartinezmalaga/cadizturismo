<?php 
class Cms5a6777ae89915192853754_9cb9c3a893fe4c2e4710f9035fca2188Class extends \Cms\Classes\PartialCode
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
