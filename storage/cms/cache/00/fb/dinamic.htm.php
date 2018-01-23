<?php 
class Cms5a672e53d2426755807009_1a255a15cd67608e1ac4103dd250053eClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
