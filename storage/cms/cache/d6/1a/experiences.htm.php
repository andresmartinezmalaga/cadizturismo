<?php 
class Cms5a5e360dcb8c9142656098_0aa3ae0db9ec871f3e841573efa48c4cClass extends \Cms\Classes\PageCode
{
public function onStart()
	{		
		$this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}

		if(Session::has('data')){
			Session::put('reciveData',Session::get('data'));
			Session::forget('data');
		}

		$this['experiences'] = json_decode(Session::get('reciveData'));
	}
public function onFindExperience(){

		$days = $_POST['days'];
		$interest = $_POST['interest'];
		$tvisit = $_POST['tvisit'];
    	
    	$experiences = $this->staticExperience->experienceFind($days,$interest,$tvisit);
    	Session::put('data',json_encode($experiences));

    	$this['experiences'] = $experiences;

    	return [
    		'#prtlExperiences' => $this->renderPartial('experiences')
    	];
    }
}
