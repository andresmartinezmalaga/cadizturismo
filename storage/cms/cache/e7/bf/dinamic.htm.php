<?php 
class Cms5a660f153984a077403111_228ce058af7ecd176297455ee8233c78Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
