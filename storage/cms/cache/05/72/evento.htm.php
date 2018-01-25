<?php 
class Cms5a69cfcf962b7463290752_c259c7bcdff6958a78c8874da9b30a6dClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

       $this['event'] = $this->staticApp->eventFindByUrl($this->page->url)[0];

    }
}
