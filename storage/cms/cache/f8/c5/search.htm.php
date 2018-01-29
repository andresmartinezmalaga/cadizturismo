<?php 
class Cms5a6ee7f38518e483246883_700cd8a568dd15c576fbf60f8d846804Class extends \Cms\Classes\PartialCode
{
public function onStart()
  {
    $this['lang']=\App::getLocale();
    if($this['lang']==''){
      $this['lang']='es';
    } 
  }
}
