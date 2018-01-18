<?php 
class Cms5a60cd25d8854344106193_c4bcc0b68e54ff3be7cdcc2a53d303d0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
