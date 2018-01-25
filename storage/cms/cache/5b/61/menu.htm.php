<?php 
class Cms5a68cae51244f364817074_9f44ddf4a6289c3cd1a99cbfde8dc895Class extends \Cms\Classes\PartialCode
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
