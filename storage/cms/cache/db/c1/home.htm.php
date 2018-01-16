<?php 
class Cms5a5e3391ae116983354598_67d6b0d8c3c64a9d22295251c6898243Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
