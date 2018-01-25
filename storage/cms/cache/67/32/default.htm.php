<?php 
class Cms5a6997d7e3a2b349477580_a0f44cfe5e3509e6b94abe6343b73eb7Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
