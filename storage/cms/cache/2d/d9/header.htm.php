<?php 
class Cms5a60cdab87ebe054115034_7bfc643ba370bf19b6a905a9d6b7d392Class extends \Cms\Classes\PartialCode
{
public function onStart()
    {   
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
