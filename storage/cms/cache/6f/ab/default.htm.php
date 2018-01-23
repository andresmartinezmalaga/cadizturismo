<?php 
class Cms5a6602cb955f7144592497_4a7ad949876c1cdd7bdbf47f60bd6890Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
