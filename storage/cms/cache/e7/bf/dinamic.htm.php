<?php 
class Cms5a69f455e3323613145503_e54ec6f72e29092970aa75334dba541bClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
