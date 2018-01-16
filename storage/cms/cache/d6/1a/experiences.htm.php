<?php 
class Cms5a5e32c06eb1f482992720_8a0a3789ba9f18a5347d37028054a493Class extends \Cms\Classes\PageCode
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
