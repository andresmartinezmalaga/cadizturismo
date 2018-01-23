<?php 
class Cms5a676085782b5768081865_417aa638bdcb8e594a18b2a7f56a6f6cClass extends \Cms\Classes\PartialCode
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
