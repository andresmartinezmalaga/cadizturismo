<?php 
class Cms5a68c0d2aad19715184608_70ca6af4d0369c67167aaab84dfb143bClass extends \Cms\Classes\PageCode
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


    $category = $_POST['category'];
    $location = $_POST['location'];
    $datepicker = explode('-', $_POST['datepicker']);
		
    $edaystart = explode('.', $datepicker[0]);
    $edayend = explode('.', $datepicker[1]);

    $daystart = new Date($edaystart[0].'-'.$edaystart[1].'-'.$edaystart[2]);
    $dayend = new Date($edayend[0].'-'.$edayend[1].'-'.$edayend[2]);

  	$aLang = App::getLocale();
    $events = $this->staticApp->eventAll($category,$daystart,$dayend,$location);
  
    return Redirect::to($aLang.'/eventos')->with( ['data' => json_encode($events)] );
 
  }
}
