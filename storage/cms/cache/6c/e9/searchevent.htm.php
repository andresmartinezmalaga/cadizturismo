<?php 
class Cms5a68828a056e7946865215_c040cb9800e3b089cdb8c928a1e6ba9bClass extends \Cms\Classes\PartialCode
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
