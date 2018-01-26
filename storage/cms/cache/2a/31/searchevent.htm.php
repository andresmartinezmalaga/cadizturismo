<?php 
class Cms5a6a0123cf8c0709188849_07d04604c183bbc258ac24c6b6512e28Class extends \Cms\Classes\PartialCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();

        if($this['lang']==''){
          $this['lang']='es';
        }
        $this['municipalities'] = $this->staticApp->getMunicipalities();
        $this['categories'] = $this->staticApp->getEventsCategories();


    }
}
