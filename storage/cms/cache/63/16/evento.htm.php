<?php 
class Cms5a69cb8a4823d427362110_0b8efe232cece40ff846e0d99bb40861Class extends \Cms\Classes\LayoutCode
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
