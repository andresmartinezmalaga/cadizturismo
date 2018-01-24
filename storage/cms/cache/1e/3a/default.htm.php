<?php 
class Cms5a676e94ce823997054421_329aeb61d1a4c12a31e1647f55d51d49Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
