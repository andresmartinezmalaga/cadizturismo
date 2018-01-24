<?php 
class Cms5a687f8a3b626773485080_62c886431794fe3fe0d0464ac1d6e9c1Class extends \Cms\Classes\PageCode
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

    //$events = $this->staticApp->eventAll();
    

	}
public function onFindEvent(){

    $category = $_POST['interest'];

		$daystart = $_POST['daystart'];
    $dayend = $_POST['dayend'];

		$location = $_POST['tvisit'];
  	$aLang = App::getLocale();
    $events = $this->staticApp->eventAll($category,$daystart,$dayend,$location);
  
    return Redirect::to($aLang.'/eventos')->with( ['data' => json_encode($events)] );
 
  }
}
