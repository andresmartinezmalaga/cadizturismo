<?php 
class Cms5a60cf053d2b2163191153_d14aa1a8f1ec945b104ad3857afc2322Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
