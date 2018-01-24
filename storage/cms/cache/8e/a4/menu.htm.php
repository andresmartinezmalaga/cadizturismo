<?php 
class Cms5a68be9105f1c829794896_11a8dda2cc0707b290a05d17ad1ec115Class extends \Cms\Classes\PartialCode
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
