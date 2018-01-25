<?php 
class Cms5a69aa07f03f0008336582_5e28aea08e6519a150edbaa42c615373Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
