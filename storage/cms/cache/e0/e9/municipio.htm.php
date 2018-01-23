<?php 
class Cms5a674a66c079a050779230_01344ae21c4f32d1a30919e84b150503Class extends \Cms\Classes\LayoutCode
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
