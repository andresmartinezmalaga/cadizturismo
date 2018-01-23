<?php 
class Cms5a670e434ca06858951420_27554203d1bce56cc320b8c8747985a6Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
