<?php 
class Cms5a6f036e443ba791311827_e351027f82d9b19ee463fcebc3967adaClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
                $this['urlPage'] = $this->page->url;
$this['metaImg'] = $this->page->apiBag["staticPage"]->attributes["viewBag"]["cover"];

}

}
