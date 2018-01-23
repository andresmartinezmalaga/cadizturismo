<?php 
class Cms5a676981756d1354823484_a19782993925164fb40f0108bacddbd8Class extends \Cms\Classes\PageCode
{
public function onStart()
	{	    
    $this['lang']=\App::getLocale();
		if($this['lang']==''){
			$this['lang']='es';
		}
    
		if(Session::has('data')){
			Session::put('reciveData',Session::get('data'));     
		}
    if(Session::has('reciveData')){
      $this['experiences'] = json_decode(Session::get('reciveData'));     
    }

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
