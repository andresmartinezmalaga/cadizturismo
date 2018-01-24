<?php 
class Cms5a68be8c0ea76904222204_ef1377d4dd812b8c38fa72313ab6bc85Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
