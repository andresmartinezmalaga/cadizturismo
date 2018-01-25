<?php 
class Cms5a69a39a67589663888048_ceb3f1c5e66533d83715e52b37820f59Class extends \Cms\Classes\PartialCode
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
