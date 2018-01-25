<?php 
class Cms5a690552b422a751295213_ecc27933cb0cf5ecedd53e4b3d23a777Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
