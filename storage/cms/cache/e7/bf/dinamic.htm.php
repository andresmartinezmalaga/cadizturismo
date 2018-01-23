<?php 
class Cms5a6708b7e3bcd560092016_4124a613d51ff557b8a527a2dfe8069eClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
