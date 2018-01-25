<?php 
class Cms5a69a668bbb7f278254507_674b0b30eb2abfecae7efeef73f5019dClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
