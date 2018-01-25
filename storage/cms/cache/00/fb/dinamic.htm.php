<?php 
class Cms5a69a39a29669774295750_81c2d5abfa45a550b5a3f4cbd0408f3aClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
