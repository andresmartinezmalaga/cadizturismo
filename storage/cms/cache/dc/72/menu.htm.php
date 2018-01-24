<?php 
class Cms5a68aaaf1c93f745061432_1d0ea78416ef96d48bd6297e454a95c0Class extends \Cms\Classes\PartialCode
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
