<?php 
class Cms5a5e31f19b563157109571_f31797b45056f9411b9cb7f41539a761Class extends \Cms\Classes\PageCode
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
