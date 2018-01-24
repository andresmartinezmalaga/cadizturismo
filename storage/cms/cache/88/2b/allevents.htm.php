<?php 
class Cms5a68be8c0ffad561312169_4242fc991822ac0be27507b808448dbcClass extends \Cms\Classes\PageCode
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

    
    echo $daystart;
    echo $dayend;

  

	   dd(1);
  	$aLang = App::getLocale();
    $events = $this->staticApp->eventAll($category,$daystart,$dayend,$location);
  
    return Redirect::to($aLang.'/eventos')->with( ['data' => json_encode($events)] );
 
  }
}
