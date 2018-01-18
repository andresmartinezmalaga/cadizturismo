<?php 
class Cms5a60c4a267818677111369_58416059b2a2a2e6fc5eb0315f32a5ffClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
