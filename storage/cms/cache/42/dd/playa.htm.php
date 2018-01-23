<?php 
class Cms5a67575d252da034081852_ec72c1c1c008a5803f2ccf84bb0e441cClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }

        $this['beaches'] = $this->staticApp->beachList();
     
    }
}
