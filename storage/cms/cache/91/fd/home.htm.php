<?php 
class Cms5a68c58816ea0458209238_df6e6f40bb07d01e5e1446539392e803Class extends \Cms\Classes\PageCode
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
