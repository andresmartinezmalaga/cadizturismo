<?php 
class Cms5a672bf1ccfc1025433512_72134ac06baf1a5e7ebd77cc6946d65fClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
