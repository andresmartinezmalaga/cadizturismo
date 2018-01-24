<?php 
class Cms5a68765adddfa115479340_ef2825c147e396ca5a3c45c14588b2c8Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
