<?php 
class Cms5a6f045a0fa1d408295474_66fac4bdb4bd30446a2d666caf8798baClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
                $this['urlPage'] = $this->page->url;

    if($this->page->apiBag)
    $this['metaImg'] = $this->page->apiBag["staticPage"]->attributes["viewBag"]["cover"];

}

}
