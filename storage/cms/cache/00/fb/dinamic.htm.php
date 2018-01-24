<?php 
class Cms5a685426e4831361271696_f901f2a771158eaaf69046d26fe51d6dClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
