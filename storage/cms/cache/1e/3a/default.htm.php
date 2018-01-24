<?php 
class Cms5a68aaaec0cb2733504369_dd1cf8f35681717833559707fd22cfecClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
