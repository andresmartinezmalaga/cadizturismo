<?php 
class Cms5a6855ab70c9c326188336_f090e90d0b2b2a6b98b12870c1e617a4Class extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    } 
  }
}
