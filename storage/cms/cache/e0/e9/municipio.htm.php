<?php 
class Cms5a5f8318b14df635273612_d55a697f45f47120cb99801fb9da000cClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        $this['experiences'] = $this->staticApp->experienceList();

      
    }
}
