<?php 
class Cms5a5f1390c6496768452800_96882357b3a8a9bf52b4ba23e4aaffa7Class extends \Cms\Classes\PageCode
{
public function onStart()
	{
		$this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}
	    $this['experiences'] = $this->staticExperience->experienceList();
	}
public function onFindExperience(){

		$days = $_POST['days'];
		$interest = $_POST['interest'];
		$tvisit = $_POST['tvisit'];
    	
    	$experiences = $this->staticExperience->experienceFind($days,$interest,$tvisit);

       	return Redirect::to('/experiences')->with( ['data' => json_encode($experiences)] );
    }
}
