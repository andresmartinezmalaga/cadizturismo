<?php 
class Cms5a6886802c3d0022882731_08452f94d13a651fa1e49e04b9e86e8aClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
