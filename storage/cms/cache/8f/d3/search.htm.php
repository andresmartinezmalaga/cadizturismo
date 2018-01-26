<?php 
class Cms5a69f456b7a7b328802225_cc3cbfabb375cd7ca440ac413bfb2956Class extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    } 
  }
}
