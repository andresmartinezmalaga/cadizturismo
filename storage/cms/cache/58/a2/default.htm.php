<?php 
class Cms5a6ee9fe874e7039918270_9150b69e819a9b731cfcf0c7049b8663Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
