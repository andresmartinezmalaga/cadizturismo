<?php 
class Cms5a69a55255feb909279451_fe5a135f02d17d753a3f528123026171Class extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
