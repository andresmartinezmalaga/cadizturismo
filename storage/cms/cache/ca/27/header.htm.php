<?php 
class Cms5a61b4d7a5b71026590215_ac2c0f9f2e68b3cac21307520c27e290Class extends \Cms\Classes\PartialCode
{
public function onStart()
    {   
        if($this['lang'] == 'es'){
            $this['menulang'] = 'nombrees';
            $this['allEvents'] = 'Todos los eventos';
        } elseif ($this['lang'] == 'en') {
            $this['menulang'] = 'nombreen';
            $this['allEvents'] = 'All events';
        } elseif ($this['lang'] == 'fr') {
            $this['menulang'] = 'nombrefr';
            $this['allEvents'] = 'Todos los eventos';
        } elseif ($this['lang'] == 'de') {
            $this['menulang'] = 'nombrede';
            $this['allEvents'] = 'Todos los eventos';
        } elseif ($this['lang'] == 'ru') {
            $this['menulang'] = 'nombreru';
            $this['allEvents'] = 'Todos los eventos';
        }        
    }
  
}
