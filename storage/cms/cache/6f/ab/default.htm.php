<?php 
class Cms5a5f35df7a2a1703879020_5877a76a69f11d9cce9f5041c58d9de0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
