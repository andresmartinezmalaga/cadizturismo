<?php 
class Cms5a68c32d0e296228392180_b11481841e49f5014f5dba53b0c89eabClass extends \Cms\Classes\PartialCode
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
