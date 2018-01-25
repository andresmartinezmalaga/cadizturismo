<?php 
class Cms5a68cae46c7f2259698664_342f1329b1e526baf1e1befc2a731d22Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
