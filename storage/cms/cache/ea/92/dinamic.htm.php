<?php 
class Cms5a685a712f6f7699255094_62045c3eb860377702024572d9e3371cClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }
}
