<?php 
class Cms5a60564c06da6131656783_2cad86110638b04622ce5a7f847539b0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        $this['staticApp'] = $this->staticExperience->experienceList();

      
    }
}
