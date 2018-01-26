<?php 
class Cms5a6a01b91a7f6348589409_cebb39052528277636bf8789d57f08dcClass extends \Cms\Classes\PageCode
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