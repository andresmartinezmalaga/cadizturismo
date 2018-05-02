<?php namespace Backend\Classes;

use Illuminate\Routing\Controller as ControllerBase;
use Backend;
use Backend\Classes\Controller;
use Illuminate\Http\JsonResponse;
use RainLab\Pages\Components\StaticApp;
use Date;
use RainLab\Pages\Classes\Experience;

use RainLab\Translate\Classes\MLCmsObject;
use Cms\Classes\Theme;
use Config;

use Backend\Models\Intereses;
use Backend\Models\Tiposvisitas;
use Backend\Models\Catgeventos;
use Backend\Models\Catgrutas;
use Backend\Models\Empresa;
use Backend\Models\Empresad;

use RainLab\Translate\Models\Locale;

use Carbon\Carbon;

class CadizTurismoController extends ControllerBase
{
	public function __construct() 
    {
    	 $this->StaticApp = new StaticApp; 
    	 $this->Experience = new Experience;
    }

	public function municipalitiesList()
    {    	
    	$municipalitiesList =  $this->StaticApp->getMunicipalities();
       
        $result = collect();
        
        foreach ($municipalitiesList as $key => $value) {
           $result->put($key,['name'=>$value,'slug'=>str_slug($value)]);
        }
    	
        //return new JsonResponse(['data'=>$municipalitiesList], 200);
        return new JsonResponse(['data'=>$result], 200);
    }

    public function municipalitiesIndex()
    {    	
    	$municipalitiesList =  $this->StaticApp->municipalitiesList();

    	$mlPages = $this->createObjectPagesMultl($municipalitiesList);
    	
    	return new JsonResponse(['data'=>$mlPages], 200);

    }

    public function municipalityByName($name){
    	
    	$slugname = str_slug($name);
    	$municipality = $this->StaticApp->municipalityByName($slugname);
    	
    	$mlPages = $this->createObjectPagesMultl($municipality);
    	
    	return new JsonResponse(['data'=>$mlPages], 200);
    }

   
   	public function regionsIndex()
    {    	
    	$regionsList =  $this->StaticApp->regionsList();
    	
    	$mlPages = $this->createObjectPagesMultl($regionsList);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function regionByName($name){
    	
    	$slugname = str_slug($name);
    	$region = $this->StaticApp->regionByName($slugname);

    	$mlPages = $this->createObjectPagesMultl($region);

    	return new JsonResponse(['data'=>$mlPages], 200);    	
    	
    }

    public function beachesIndex()
    {    	
    	$beachesIndex =  $this->StaticApp->beachesList();
    	
    	$mlPages = $this->createObjectPagesMultl($beachesIndex);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function beachByName($name){
    	$slugname = str_slug($name);
    	$beach = $this->StaticApp->beachByName($slugname);
    	
    	$mlPages = $this->createObjectPagesMultl($beach);

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function rutasIndex()
    {    	
    	$rutasList =  $this->StaticApp->rutasList();
    	
    	$mlPages = $this->createObjectPagesMultl($rutasList);

        

		return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function rutaByName($name){
        $slugname = str_slug($name);
        $ruta = $this->StaticApp->rutaByName($slugname);
        
        $mlPages = $this->createObjectPagesMultl($ruta);

        return new JsonResponse(['data'=>$mlPages], 200); 
    }

    public function rutasCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getRutasCategories()],200);
    }

    public function rutaFind($category, $days, $location){
    	
    	$lowCategory = strtolower($category);
    	$lowDays = strtolower($days);
    	$lowLocation = strtolower($location);

    	$ruta = $this->StaticApp->rutaFind($lowCategory, $lowDays, $lowLocation);
    	
    	$mlPages = $this->createObjectPagesMultl($ruta);

		return new JsonResponse(['data'=>$mlPages], 200);   
    }

    public function eventsCategories() {
    	return new JsonResponse(['data'=> $this->StaticApp->getEventsCategories()],200);
    }

    public function eventsIndex()
    {    	
    	$eventsList =  $this->StaticApp->eventAll();
    	
    	$mlPages = $this->createObjectPagesMultl($eventsList);

		return new JsonResponse(['data'=>$mlPages], 200);    
    	
    }

    public function eventByName($name){
        $slugname = str_slug($name);
        $event = $this->StaticApp->eventByName($slugname);
        
        $mlPages = $this->createObjectPagesMultl($event);

        return new JsonResponse(['data'=>$mlPages], 200); 
    }

    // date format : 07-02-2018
    public function eventFind($category, $date_start, $date_end, $location){
    	
    	$daystart = (new Date($date_start))->format('d-m-Y');
    	$dayend = (new Date($date_end))->format('d-m-Y');

    	$lowCategory = strtolower($category);
    	$lowLocation = strtolower($location);

    	$event = $this->StaticApp->eventFind($lowCategory, $daystart, $dayend, $lowLocation);
    	
    	$mlPages = $this->createObjectPagesMultl($event);

		return new JsonResponse(['data'=>$mlPages], 200);    

    }

    public function experienceFind($days,$interest,$tvisit) {

    	$lowInterest = strtolower($interest);
    	$lowTvisit = strtolower($tvisit);

    	$experience = $this->StaticApp->experienceFind($days,$lowInterest,$lowTvisit);

    	$mlPages = $this->createObjectPagesMultl($experience);

		return new JsonResponse(['data'=>$mlPages], 200);   
    }

    public function experienceByName($name){
        $slugname = str_slug($name);
        $experience = $this->StaticApp->experienceByName($slugname);
        
        $mlPages = $this->createObjectPagesMultl($experience);

        return new JsonResponse(['data'=>$mlPages], 200); 
    }


    public function experienceInterests(){

    	return new JsonResponse(['data'=> $this->Experience->getInterestsOptions()],200);
    }

    public function experienceTVisit(){

    	return new JsonResponse(['data'=> $this->Experience->getVisitsOptions()],200);
    }

    public function statics() {

    	$result = collect();
    	$naturaleza_grupo = collect();
    	$naturaleza = collect();
    	$espacios_naturales = collect();
    	$diversion = collect();
    	$cultura = collect();
    	$gastronomia = collect();

    	$iPages = $this->StaticApp->staticsFindByUrl('/naturaleza');
    	$mlPages = [$this->createObjectPagesMultl($iPages)];
        	
    	foreach ($mlPages[0] as $iPage) {
    		
    		if (strpos($iPage['es']['viewBag']['url'], '/naturaleza/espacios-naturales') !== false) {               
                $espacios_naturales->put(str_slug($iPage['es']['viewBag']['title']),$iPage);
            } else {
            	
            	$naturaleza->put(str_slug($iPage['es']['viewBag']['title']),$iPage);
            }
    	}

    	$naturaleza_grupo->put('naturaleza',$naturaleza);
    	$naturaleza_grupo->put('espacios_naturales',$espacios_naturales);
    	
    	$iPages = $this->StaticApp->staticsFindByUrl('/diversion');
    	$mlPages = $this->createObjectPagesMultl($iPages);
    	$diversion->push($mlPages);

		$iPages = $this->StaticApp->staticsFindByUrl('/cultura');
		$mlPages = $this->createObjectPagesMultl($iPages);
    	$cultura->push($mlPages);

    	$iPages = $this->StaticApp->staticsFindByUrl('/gastronomia');
    	$mlPages = $this->createObjectPagesMultl($iPages);
    	$gastronomia->push($mlPages);

    	$result->put('naturaleza',$naturaleza_grupo);
    	$result->put('diversion',$diversion[0]);
    	$result->put('cultura',$cultura[0]);
    	$result->put('gastronomia',$gastronomia[0]);

    	return new JsonResponse(['data'=>$result], 200);
    }


    public function createObjectPagesMultl($pages){

    	$result = collect();

    	foreach ($pages as $iPage) {

    		$pagesML = collect();
    		
    		if(isset($iPage->title)){
    			$result->put(str_slug($iPage->title),$pagesML);
    		} elseif(isset($iPage->url)) {
    			$result->put(str_slug($iPage->url),$pagesML);
    		} else{
    			$result->push($pagesML);
    		}

    		if(isset($iPage->markup)) {
    			$markupFullUrl = str_replace('/storage/',config('app.urlApp').'storage/',$iPage->markup);
    			$pagesML->put('es',['markup'=>$markupFullUrl,'viewBag'=>$iPage->viewBag]);
			}   		
    		
    		if(isset($iPage->localeUrl)){

	    		foreach ($iPage->localeUrl as $key => $value) {
	    			
	    			$locale = $key;
	    			$iPage->theme = Theme::getActiveTheme();
	    			$imlPage = MLCmsObject::findLocale($locale, $iPage);
	    			$markupFullUrl = '';
	    			if(isset($imlPage->markup)){
		    			$markupFullUrl = str_replace('/storage/',config('app.urlApp').'storage/',$imlPage->markup);
	    			}
		    		$pagesML->put($key,['markup'=>$markupFullUrl]);
	    		}   
	    	}
    	}
    	return $result;
    }

    // EMPRESAS 
    
    public function getTiposEmpresas() {
        //$types = $this->StaticApp->getTiposEmpresas();
        $types = $this->StaticApp->getTiposEmpresasFull();
        return new JsonResponse(['data'=>$types], 200);
    }

    public function empresasList($typeslug, $municipalityslug, $searchString) {
        
        $empresasList =  $this->StaticApp->empresasFind($typeslug, $municipalityslug, $searchString);
        $result = $this->empresasGetMltg($empresasList);
        return new JsonResponse(['data'=>$result], 200);
    
    }

    public function empresasListPag($typeslug, $municipalityslug, $searchString, $pag, $number) {
        $empresasList =  $this->StaticApp->empresasFindPag($typeslug, $municipalityslug, $searchString, $pag, $number);
        $result = $this->empresasGetMltg($empresasList);
        return new JsonResponse(['data'=>$result], 200);
    }

    public function empresasListByType ($typeslug) {
        $empresasList =  $this->StaticApp->empresasFindByType($typeslug);
        $result = $this->empresasGetMltg($empresasList);
        return new JsonResponse(['data'=>$result], 200);
    }

    public function empresasListByTypePag ($typeslug, $pag, $number) {
        $empresasList =  $this->StaticApp->empresasFindByTypePag($typeslug, $pag, $number);
        $result = $this->empresasGetMltg($empresasList);
        return new JsonResponse(['data'=>$result], 200);
    }

    public function empresasListByUpdated($date){
        $empresas = Empresa::All();
        $rEmpresas = collect();
        $upDate = Carbon::parse($date);
       
        foreach ($empresas as $empresa) {
             
             $diff = $empresa->updated_at->diffInDays($upDate,false);

             return new JsonResponse(['data'=>$diff], 200);
             
             if($diff<1){
                  $rEmpresas->push($empresa);
             }
        }
        $result = $this->empresasGetMltg($rEmpresas);
        return new JsonResponse(['data'=>$result], 200);
    }

    public function empresasDeleteList(){
         return Empresad::All();
    }

    public function empresaShowByNameSlug ($nameslug,$lang) {
        
        $empresa =  $this->StaticApp->empresasFindBySlug($nameslug);      
        $empresa->translateContext($lang);
        
        return new JsonResponse(['data'=>$empresa], 200);
    }


    public function empresasGetMltg($empresasList) {

        $MLocale = new Locale();
        $result = collect();
                                
        foreach ($empresasList as $iEmpresa) {
            
            $cempresa = collect();

            foreach ($MLocale->listAvailable() as $key => $value) {
                
                if($key != 'es'){

                    $iEmpresa->translateContext($key);
                    $cempresa->put($key,['title'=>$iEmpresa->title,'description'=>$iEmpresa->description,'info'=>$iEmpresa->info]);                   
                    
                } else {
                    $iEmpresa->translateContext('es');
                    $cempresa->put($key,$iEmpresa); 
                }
                
            }
           
            $result->put($cempresa['es']->name,$cempresa);

        }

        return $result;
    
    }

    // PUBLICACIONES
    public function publicationListPag ($lang, $pag, $number) {

        $publications = $this->StaticApp->publicationListPag($pag, $number);

        $result = collect();

        foreach ($publications as $iPublication) {
            
            $iPublication->theme = Theme::getActiveTheme();
            
            if($lang!='es'){
                 $imlPage = MLCmsObject::findLocale($lang, $iPublication);
            } else {
                $imlPage = $iPublication;
            }

            $result->push($imlPage);          

        }

        return new JsonResponse(['data'=>$result], 200); 

       
    }
    

    public function rutaCategoriaById($id){

        $MLocale = new Locale();

        $ccat = collect();

        $cat = Catgrutas::find($id);

        foreach ($MLocale->listAvailable() as $key => $value) {
            if($key != 'es'){
                $cat->translateContext($key);
                $ccat->put($key,['id'=>$cat->id,'name'=>$cat->name]); 
            } else {
                $cat->translateContext('es');
                $ccat->put($key,$cat); 
            }
        }

        return new JsonResponse(['data'=> $ccat], 200);  
    }

    public function eventoCategoriaById($id){

        $MLocale = new Locale();

        $ccat = collect();

        $cat = Catgeventos::find($id);

        foreach ($MLocale->listAvailable() as $key => $value) {
            if($key != 'es'){
                $cat->translateContext($key);
                $ccat->put($key,['id'=>$cat->id,'name'=>$cat->name]); 
            } else {
                $cat->translateContext('es');
                $ccat->put($key,$cat); 
            }
        }

        return new JsonResponse(['data'=> $ccat], 200);  
    }

    public function expInteresById($id){
        
        $MLocale = new Locale();

        $cintrs = collect();

        $intrs = Intereses::find($id);

        foreach ($MLocale->listAvailable() as $key => $value) {
            if($key != 'es'){
                $intrs->translateContext($key);
                $cintrs->put($key,['id'=>$intrs->id,'name'=>$intrs->name]); 
            } else {
                $intrs->translateContext('es');
                $cintrs->put($key,$intrs); 
            }
        }

        return new JsonResponse(['data'=> $cintrs], 200);  
    }

    public function expTVisitaById($id){

        $MLocale = new Locale();

        $ctvs = collect();

        $itvs = Tiposvisitas::find($id);

        foreach ($MLocale->listAvailable() as $key => $value) {
            if($key != 'es'){
                $itvs->translateContext($key);
                $ctvs->put($key,['id'=>$itvs->id,'name'=>$itvs->name]); 
            } else {
                $itvs->translateContext('es');
                $ctvs->put($key,$itvs); 
            }
        }

        return new JsonResponse(['data'=> $ctvs], 200);  
    }

}
