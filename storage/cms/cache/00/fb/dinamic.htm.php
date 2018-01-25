<?php 
class Cms5a69b8a8302fd498249800_3315fe6b4031fc26eb6b254be1bee680Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
