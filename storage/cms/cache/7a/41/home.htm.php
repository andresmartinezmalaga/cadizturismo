<?php 
class Cms5a68557ca8daf326893890_e93d2334ef984c3dc85743dab05c7869Class extends \Cms\Classes\PageCode
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
