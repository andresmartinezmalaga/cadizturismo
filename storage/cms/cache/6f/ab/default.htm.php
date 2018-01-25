<?php 
class Cms5a69f64ade711606592781_568fa4d2f76058c03c26d85351bff52eClass extends \Cms\Classes\LayoutCode
{
public function onStart()
    {
        $this['lang']=\App::getLocale();
        if($this['lang']==''){
            $this['lang']='es';
        }
    }

}
