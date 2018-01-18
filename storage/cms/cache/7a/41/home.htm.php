<?php 
class Cms5a605bb8c267d977225386_5190da4f3c6df168d0787aecb021ce4eClass extends \Cms\Classes\PageCode
{
public function onStart()
	{
		$this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}
	    $this['experiences'] = $this->staticApp->experienceList();
	}
public function onFindExperience(){

		$days = $_POST['days'];
		$interest = $_POST['interest'];
		$tvisit = $_POST['tvisit'];
    	
    	$experiences = $this->staticApp->experienceFind($days,$interest,$tvisit);

       	return Redirect::to('/experiences')->with( ['data' => json_encode($experiences)] );
    }
}
