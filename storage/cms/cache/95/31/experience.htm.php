<?php 
class Cms5a60d2ca9a96d775477893_4f86fb331366dea5345fcaf217074595Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
