<?php 
class Cms5a6ee7f2d0fee870775495_9bea9647bd118da015650d339f1817e8Class extends \Cms\Classes\PageCode
{
public function onStart()
	{

    $this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}

    $this['events3'] = $this->staticApp->event3List();
    $this['eventsVip'] = $this->staticApp->eventVipList();

	}
public function onFindExperience(){

		$days = $_POST['days'];
		$interest = $_POST['interest'];
		$tvisit = $_POST['tvisit'];

      $aLang = App::getLocale();

    	$experiences = $this->staticApp->experienceFind($days,$interest,$tvisit);
      return Redirect::to($aLang.'/experiencias')->with( ['data' => json_encode($experiences)] );
    }
}
