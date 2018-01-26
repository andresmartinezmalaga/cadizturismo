<?php 
class Cms5a6afa50d8dfc773511973_47c11ec518bd1d424bffea7af05171bcClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
