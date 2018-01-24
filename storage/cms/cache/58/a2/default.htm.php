<?php 
class Cms5a68c2f5bd1a1911399086_5c37013af32598fcbf7d3117ea80325bClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
