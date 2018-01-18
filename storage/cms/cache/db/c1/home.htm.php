<?php 
class Cms5a60526cc1b74248754299_a79c1b8bf2a59368a389c1c19c4a9a71Class extends \Cms\Classes\LayoutCode
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
