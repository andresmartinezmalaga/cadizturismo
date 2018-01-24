<?php 
class Cms5a68be8c5b3d6453333288_67ca4c4639ace6bad7f770347082c6beClass extends \Cms\Classes\PartialCode
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
