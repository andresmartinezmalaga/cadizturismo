<?php 
class Cms5a5f828f56dec771584890_db8c87dfe2bfa2f5c1af57bf9547e8ccClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
  
}
