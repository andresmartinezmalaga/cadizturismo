<?php 
class Cms5a6eecbb9dd12165420077_288f9406a8eba663e0ba7a6f0147e61dClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
