<?php 
class Cms5a60c2c2d391c940290730_0f12ddd91fd77da67a654fc70e8f4c59Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {      
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        if($this['lang'] == 'es'){
            $this['menulang'] = 'nombrees';
        } elseif ($this['lang'] == 'en') {
            $this['menulang'] = 'nombreen';
        } elseif ($this['lang'] == 'fr') {
            $this['menulang'] = 'nombrefr';
        } elseif ($this['lang'] == 'de') {
            $this['menulang'] = 'nombrede';
        } elseif ($this['lang'] == 'ru') {
            $this['menulang'] = 'nombreru';
        }
        
    }
  
}
