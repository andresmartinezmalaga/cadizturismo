<?php 
class Cms5a5e33bb27e7b837284946_f1b70e4b5e7fd1ecb81bc8949422cb2fClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
