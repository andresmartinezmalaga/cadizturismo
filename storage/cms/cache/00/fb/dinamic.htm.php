<?php 
class Cms5a690234ef15c391870200_1cb758c36c32d139a1cbebb9a95e6796Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
