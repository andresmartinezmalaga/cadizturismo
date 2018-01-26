<?php 
class Cms5a6afa517cf2d954788123_52d709a31c837f44777d6b36ffb1a4afClass extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    } 
  }
}
