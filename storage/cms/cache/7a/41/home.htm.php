<?php 
class Cms5a6afa50da11d092384203_872e9a20816ac41a17ce40e0f54fa779Class extends \Cms\Classes\PageCode
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
