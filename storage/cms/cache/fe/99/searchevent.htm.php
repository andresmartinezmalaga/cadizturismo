<?php 
<<<<<<< HEAD:storage/cms/cache/6c/e9/searchevent.htm.php
class Cms5a69a39a67589663888048_ceb3f1c5e66533d83715e52b37820f59Class extends \Cms\Classes\PartialCode
=======
class Cms5a6997d2426c1233829870_caadaab0042e1b544a179f90c7bb6707Class extends \Cms\Classes\PartialCode
>>>>>>> 491ada266dd4d7718bcf5c9702c800d83ff94f0c:storage/cms/cache/fe/99/searchevent.htm.php
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
