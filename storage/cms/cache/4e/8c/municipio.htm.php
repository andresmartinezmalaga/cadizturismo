<?php 
class Cms5a6777ae241fa218233870_de622433e8ce882a5575a22090d41835Class extends \Cms\Classes\LayoutCode
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
