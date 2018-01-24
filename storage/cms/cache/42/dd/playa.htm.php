<?php 
class Cms5a676f0f9cbff741680456_61cb512014eb2f488908057c58f801caClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        $this['beaches'] = $this->staticApp->beachList();

    }
}
