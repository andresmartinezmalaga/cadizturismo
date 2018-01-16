<?php 
class Cms5a5dd45f0de25639791846_cf43e601103ee93efa17025962f01d49Class extends \Cms\Classes\LayoutCode
{
public function onStart()
  {
      $this['lang']=\App::getLocale();
        $this['experiences'] = $this->staticExperience->experienceList();
  }
}
