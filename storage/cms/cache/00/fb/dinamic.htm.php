<?php 
class Cms5a6885bb6ffd4125915717_529928e3671e2c8438da78eb41b7b5aeClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
