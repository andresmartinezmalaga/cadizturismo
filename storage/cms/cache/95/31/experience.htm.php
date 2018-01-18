<?php 
class Cms5a60c80360b16990560768_7e4948fe71f76019c40c227129ec124fClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
