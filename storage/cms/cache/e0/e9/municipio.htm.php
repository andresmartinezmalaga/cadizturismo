<?php 
class Cms5a676f3432d93552978088_758253a9cfee147756b13fd3a8592e28Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        $this['municipalities'] = $this->staticApp->municipalitiesList();
     
    }
}
