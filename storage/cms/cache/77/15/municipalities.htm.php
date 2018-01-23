<?php 
class Cms5a67347f4faa3956025103_50760c23bafc39d94fc197807e350d0aClass extends \Cms\Classes\PartialCode
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
