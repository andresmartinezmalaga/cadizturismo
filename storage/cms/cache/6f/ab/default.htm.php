<?php 
class Cms5a67733c583e2585655811_f703cfb627cb55ab227c736ef2849ab2Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
