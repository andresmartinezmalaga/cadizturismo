<?php 
class Cms5a60cbccd9e67562621039_02d2b689094e6ecff761cb0c9a76aed0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        
    }
  
}
