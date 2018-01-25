<?php 
class Cms5a69a39a2a5e5048769438_700852002e6a0243a7b651bddff1c192Class extends \Cms\Classes\PageCode
{
public function onStart()
	{	    
    $this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}
    
    if(Session::has('data')){
      Session::put('reciveData',Session::get('data'));     
    }

    $this['events'] = $this->staticApp->eventAll();

    
	}
public function onFindEvent(){


    $category = $_POST['category'];
    $location = $_POST['location'];
    $datepicker = explode('-', $_POST['datepicker']);
		
    $edaystart = explode('.', $datepicker[0]);
    $edayend = explode('.', $datepicker[1]);

    $daystart = new Date($edaystart[0].'-'.$edaystart[1].'-'.$edaystart[2]);
    $dayend = new Date($edayend[0].'-'.$edayend[1].'-'.$edayend[2]);

  	$aLang = App::getLocale();
    $events = $this->staticApp->eventFind($category,$daystart,$dayend,$location);
  
    return Redirect::to($aLang.'/listado-de-eventos')->with( ['data' => json_encode($events)] );
 
  }
}
