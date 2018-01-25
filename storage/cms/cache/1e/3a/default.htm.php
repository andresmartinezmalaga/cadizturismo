<?php 
class Cms5a69a1b529784057771959_5f29719d730a1f5ab7fee1ab405896e2Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
