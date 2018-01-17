<?php 
class Cms5a5f1390c5545510479980_d5d1a93c23012a94fff8269d48831c2eClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
