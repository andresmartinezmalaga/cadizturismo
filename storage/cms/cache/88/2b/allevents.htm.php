<?php 
class Cms5a6997d1d6345520480406_c7f455114c42dd32fbe052b6df675f56Class extends \Cms\Classes\PageCode
>>>>>>> 491ada266dd4d7718bcf5c9702c800d83ff94f0c:storage/cms/cache/88/2b/allevents.htm.php
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
