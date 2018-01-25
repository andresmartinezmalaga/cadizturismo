<?php 
class Cms5a69fbab3691b170294711_13a321715e29598e73d99993f83aeaa9Class extends \Cms\Classes\LayoutCode
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
