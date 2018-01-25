<?php 
class Cms5a69f455eb647671174263_51e19f7628cffe50161bb4b0d7054846Class extends \Cms\Classes\PageCode
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
