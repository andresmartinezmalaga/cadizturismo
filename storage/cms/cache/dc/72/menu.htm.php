<?php 
class Cms5a687aafe24c5624992793_62ee67813f1ebd66e572266fbaf49dd1Class extends \Cms\Classes\PartialCode
{
public function onStart()
    {      
      $this['menulang'] = 'nombrees';

      if ($this['lang'] == 'en') {
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
