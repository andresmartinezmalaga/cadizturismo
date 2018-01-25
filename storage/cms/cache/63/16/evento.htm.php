<?php 
class Cms5a6909cab30cc945049624_b732215416a0bc33509dd480d9919065Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
