<?php 
class Cms5a6eeb2b66e73017454554_77ae4ba47e034b082ede9021e964aa1eClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
