<?php 
<<<<<<< HEAD:storage/cms/cache/00/fb/dinamic.htm.php
class Cms5a69a39a29669774295750_81c2d5abfa45a550b5a3f4cbd0408f3aClass extends \Cms\Classes\LayoutCode
=======
class Cms5a6997d1d5535543986437_3f927df23182d1ea07c6115c7ad0e4a0Class extends \Cms\Classes\LayoutCode
>>>>>>> 491ada266dd4d7718bcf5c9702c800d83ff94f0c:storage/cms/cache/ea/92/dinamic.htm.php
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
