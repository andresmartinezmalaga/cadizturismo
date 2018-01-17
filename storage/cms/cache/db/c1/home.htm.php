<?php 
class Cms5a5e360dcac1f409680450_6fc3837d30542b76dbf99c6c4e6f1261Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
