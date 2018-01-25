<?php 
class Cms5a69a52729e41497418453_e9e9ffd93e00106b9955ffb66e5192c1Class extends \Cms\Classes\PartialCode
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
