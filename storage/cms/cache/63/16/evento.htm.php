<?php 
class Cms5a68acc2cc3d2107281516_f8c6f89f483bee2697f25bbb7b1377cdClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
