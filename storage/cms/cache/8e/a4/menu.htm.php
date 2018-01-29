<?php 
class Cms5a6f045a3789b470721833_d40f0d1176900c2569cc1d34a38f35cdClass extends \Cms\Classes\PartialCode
{
public function onStart()
  {
     if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
          $this['preurl'] = '/cadizturismo';
     } else {
        $this['preurl'] = '';
     }
  }
}
