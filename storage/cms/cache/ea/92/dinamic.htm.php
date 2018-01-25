<?php 
class Cms5a6997d1d5535543986437_3f927df23182d1ea07c6115c7ad0e4a0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
