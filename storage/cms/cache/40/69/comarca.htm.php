<?php 
class Cms5a60975190fea379738674_7da5f3e35afc5cb1e883f9aa1193b34cClass extends \Cms\Classes\LayoutCode
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
