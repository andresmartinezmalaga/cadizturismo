<?php 
class Cms5a68c0d302410423340052_f8e2f7a2d0ea81920fecee9d1e127049Class extends \Cms\Classes\PartialCode
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
