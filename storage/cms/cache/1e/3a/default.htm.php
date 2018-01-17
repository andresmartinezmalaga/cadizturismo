<?php 
class Cms5a5e36710aeea795736247_70d6ea0cd92b3b661645eb1824cad109Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
