<?php 
class Cms5a69c650aa3bd738062413_1fbb80dc88fa0b6e6ab45474fe724f78Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
