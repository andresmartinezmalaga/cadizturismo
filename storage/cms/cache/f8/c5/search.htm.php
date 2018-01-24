<?php 
class Cms5a68c469c5c5e981073805_db3f1784315f5688f36a8039a684e48aClass extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    } 
  }
}
