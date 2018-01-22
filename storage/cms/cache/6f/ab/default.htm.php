<?php 
class Cms5a61b4d76e1a9481836263_8ab42c5533a05f260fe462e7b594541aClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
