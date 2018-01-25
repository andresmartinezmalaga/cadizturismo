<?php 
<<<<<<< HEAD:storage/cms/cache/1e/3a/default.htm.php
class Cms5a69a1b529784057771959_5f29719d730a1f5ab7fee1ab405896e2Class extends \Cms\Classes\LayoutCode
=======
class Cms5a68cae46c7f2259698664_342f1329b1e526baf1e1befc2a731d22Class extends \Cms\Classes\LayoutCode
>>>>>>> 491ada266dd4d7718bcf5c9702c800d83ff94f0c:storage/cms/cache/6f/ab/default.htm.php
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
