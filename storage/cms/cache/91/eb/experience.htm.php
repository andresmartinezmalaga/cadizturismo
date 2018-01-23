<?php 
class Cms5a67622d918f4379979979_1a16193ea6462abc84c7819f01a82936Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
