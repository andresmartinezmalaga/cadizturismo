<?php 
class Cms5a67423a3867a071764371_d91a7e481cb13522a9a626d7d04a17b3Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
