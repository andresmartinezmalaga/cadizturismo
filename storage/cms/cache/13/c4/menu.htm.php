<?php 
class Cms5a6f045bc2eb6596881062_0135199513896ba62a1cdc76eb22f27dClass extends \Cms\Classes\PartialCode
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
