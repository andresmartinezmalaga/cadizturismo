<?php 
class Cms5a5f3168ea1b0562255534_0e2f0dd4b3f4a311d97b87807b724605Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
