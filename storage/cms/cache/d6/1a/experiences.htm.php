<?php 
class Cms5a6052767c7fa722352094_369b28a87f1c1c700a7302e5a96ce073Class extends \Cms\Classes\PageCode
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
    	
    	$experiences = $this->staticApp->experienceFind($days,$interest,$tvisit);
    	Session::put('data',json_encode($experiences));

    	$this['experiences'] = $experiences;

    	return [
    		'#prtlExperiences' => $this->renderPartial('experiences')
    	];
    }
}
