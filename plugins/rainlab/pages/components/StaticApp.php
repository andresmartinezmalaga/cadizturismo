<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\MenuItemReference;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Request;
use Url;
use DateTime;
use Carbon\Carbon;
use Carbon\CarbonInterval;

use Barryvdh\Snappy\Facades\SnappyPdf as PDFS;

use Mail;

use Response;
use File;
use Twig;

use Config;

use Backend\Models\Home;

use \Backend\Models\Tipo;
use \Backend\Models\Empresa;

use Backend\Models\Intereses;
use Backend\Models\Tiposvisitas;
use Backend\Models\Catgeventos;
use Backend\Models\Catgrutas;


use RainLab\Translate\Models\Locale;
use RainLab\Translate\Classes\MLCmsObject;


use Backend\Models\User;

/**
 * The static page component.
 *
 * @package rainlab\pages
 *
 */
class StaticApp extends ComponentBase
{


    /**
     * @var \RainLab\Pages\Classes\Page A reference to the static page object
     */

    public function componentDetails()
    {
        return [
            'name'        => 'StaticApp',
            'description' => 'StaticApp description'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function getHomeVars (){
        $home = Home::find(1);
        $urs = User::find(4);
        $image = $home->avatar->getPath();
        $home->image = $image;
        $home->facebook = $urs->facebook;
        $home->twitter = $urs->twitter;
        $home->youtube = $urs->youtube;
        $home->instagram = $urs->instagram;

        return $home;
    }

    // sort ok
    public function getEventsCategories(){

      $catgeventos = Catgeventos::orderBy('name')->get();

      $result = collect();

      foreach ($catgeventos as $icatg) {
        $result->put($icatg->id, ucwords($icatg->name));
      }

      return $result;

    }

     public function getEventCategoriyId($slug) {

       $catgevento = Catgeventos::where('slug',$slug)->first();

        //if(count($catgevento)>0){
        if($catgevento){
            return $catgevento->id;
        }else {
            return null;
        }
    }

    public function getEventsCategoriesById($id) {

        $catgs = Catgeventos::find($id);
        //if(count($catgs)>0){
        if($catgs){
            return $catgs->name;
        } else {
            return [];
        }

    }

    // sort ok
    public function getRutasCategories(){

      $catgrutas = Catgrutas::all();

      $result = collect();

      foreach ($catgrutas as $icatg) {
        $result->put($icatg->id, ucwords($icatg->name));
      }

      return $result;
    }

    public function getRutaCategoriyId($slug) {

       $catgruta = Catgrutas::where('slug',$slug)->first();

        if(count($catgruta)>0){
            return $catgruta->id;
        }else {
            return null;
        }
    }

    public function getRutasCategoriesById($id) {

        $catgs = Catgrutas::find($id);
        //if(count($catgs)>0){
        if($catgs){
            return $catgs->name;
        } else {
            return [];
        }

    }

    // sort ok
    public function getMunicipalities(){
        return [
        'alcalá de los gazules' => 'Alcalá de los Gazules',
        'alcalá del valle' => 'Alcalá del Valle',
        'algar' => 'Algar',
        'algeciras' => 'Algeciras',
        'algodonales' => 'Algodonales',
        'arcos de la frontera' => 'Arcos de la Frontera',
        'barbate' => 'Barbate',
        'benalup casas viejas' => 'Benalup Casas Viejas',
        'benaocaz' => 'Benaocaz',
        'bornos' => 'Bornos',
        'cádiz' => 'Cádiz',
        'castellar de la frontera' => 'Castellar de la Frontera',
        'chiclana de la frontera' => 'Chiclana de la Frontera',
        'chipiona' => 'Chipiona',
        'conil de la frontera' => 'Conil de la Frontera',
        'el bosque' => 'El Bosque',
        'el gastor' => 'El Gastor',
        'el puerto de santa maría' => 'El Puerto de Santa María',
        'espera' => 'Espera',
        'grazalema' => 'Grazalema',
        'jerez de la frontera' => 'Jerez de la Frontera',
        'jimena de la frontera' => 'Jimena de la Frontera',
        'la línea de la concepción' => 'La Línea de la Concepción',
        'los barrios' => 'Los Barrios',
        'medina sidonia' => 'Medina Sidonia',
        'olvera' => 'Olvera',
        'paterna de rivera' => 'Paterna de Rivera',
        'prado del rey' => 'Prado del Rey',
        'puerto real' => 'Puerto Real',
        'puerto serrano' => 'Puerto Serrano',
        'rota' => 'Rota',
        'san fernando' => 'San Fernando',
        'san josé del valle' => 'San José del Valle',
        'sanlúcar de barrameda' => 'Sanlúcar de Barrameda',
        'san martín del tesorillo' => 'San Martín del Tesorillo',
        'san roque' => 'San Roque',
        'setenil de las bodegas' => 'Setenil de las Bodegas',
        'tarifa' => 'Tarifa',
        'torre alháquime' => 'Torre Alháquime',
        'trebujena' => 'Trebujena',
        'ubrique' => 'Ubrique',
        'vejer de la frontera' => 'Vejer de la Frontera',
        'villaluenga del rosario' => 'Villaluenga del Rosario',
        'villamartín' => 'Villamartín',
        'zahara de la sierra' => 'Zahara de la Sierra',
        'zahara de los atunes' => 'Zahara de los Atunes'
        ];
    }


    /*Algeciras
    Barbate
    Chiclana de la Frontera
    Chipiona
    Conil de la Frontera
    Cádiz
    El Puerto de Santa María
    La Línea de la Concepción
    Los Barrios
    Puerto Real
    Rota
    San Fernando
    San Roque
    Sanlúcar de Barrameda
    Tarifa
    Vejer de la Frontera*/

    // sort ok
    public function getMunicipalitiesBeaches(){
        return [
        'algeciras' => 'Algeciras',
        'barbate' => 'Barbate',
        'cádiz' => 'Cádiz',
        'chiclana de la frontera' => 'Chiclana de la Frontera',
        'chipiona' => 'Chipiona',
        'conil de la frontera' => 'Conil de la Frontera',
        'el puerto de santa maría' => 'El Puerto de Santa María',
        'la línea de la concepción' => 'La Línea de la Concepción',
        'los barrios' => 'Los Barrios',
        'puerto real' => 'Puerto Real',
        'rota' => 'Rota',
        'san fernando' => 'San Fernando',
        'sanlúcar de barrameda' => 'Sanlúcar de Barrameda',
        'san roque' => 'San Roque',
        'tarifa' => 'Tarifa',       
        'vejer de la frontera' => 'Vejer de la Frontera'       
        ];
    }

    public function getMunicipalitiesBySlug($slug){

        $municipios =  [
        'alcala-de-los-gazules' => 'alcalá de los gazules',
        'alcala-del-valle' => 'alcalá del valle',
        'algar' => 'algar',
        'algeciras' => 'algeciras',
        'algodonales' => 'algodonales',
        'arcos-de-la-frontera' => 'arcos de la frontera',
        'barbate' => 'barbate',
        'benalup-casas-viejas' => 'benalup casas viejas',
        'benaocaz' => 'benaocaz',
        'bornos' => 'bornos',
        'cadiz' => 'cádiz',
        'castellar-de-la-frontera' => 'castellar de la frontera',
        'chiclana-de-la-frontera' => 'chiclana de la frontera',
        'chipiona' => 'chipiona',
        'conil-de-la-frontera' => 'conil de la frontera',
        'el-bosque' => 'el bosque',
        'el-gastor' => 'el gastor',
        'el-puerto-de-santa-maria' => 'el puerto de santa maría',
        'espera' => 'espera',
        'grazalema' => 'grazalema',
        'jerez-de-la-frontera' => 'jerez de la frontera',
        'jimena-de-la-frontera' => 'jimena de la frontera',
        'la-linea-de-la-concepcion' => 'la línea de la concepción',
        'los-barrios' => 'los barrios',
        'medina-sidonia' => 'medina sidonia',
        'olvera' => 'olvera',
        'paterna-de-rivera' => 'paterna de rivera',
        'prado-del-rey' => 'prado del rey',
        'puerto-real' => 'puerto real',
        'puerto-serrano' => 'puerto serrano',
        'rota' => 'rota',
        'san-fernando' => 'san fernando',
        'san-jose-del-valle' => 'san josé del valle',
        'sanlucar-de-barrameda' => 'sanlúcar de barrameda',
        'san-martin-del-tesorillo' => 'san martín del tesorillo',
        'san-roque' => 'san roque',
        'setenil-de-las-bodegas' => 'setenil de las bodegas',
        'tarifa' => 'tarifa',
        'torre-alhaquime' => 'torre alháquime',
        'trebujena' => 'trebujena',
        'ubrique' => 'ubrique',
        'vejer-de-la-frontera' => 'vejer de la frontera',
        'villaluenga-del-rosario' => 'villaluenga del rosario',
        'villamartin' => 'villamartín',
        'zahara-de-la-sierra' => 'zahara de la sierra',
        ];

        if(isset($municipios[$slug])){
            return $municipios[$slug];
        } else {
            return 'all';
        }

    }

    // sort ok
    public function getBeachCategoriesType(){
        return [
            'urbana' => 'Urbana',
            'virgen' => 'Virgen'
        ];
    }

    // sort ok
    public function getBeachCategoriesOptions(){
        return [
            'animales' => 'Animales',
            'camping' => 'Camping',
            'deporte' => 'Deporte',
            'instalaciones' => 'Instalaciones',
            'naturaleza' => 'Naturaleza',
            'nudista' => 'Nudista',
            'restauración' => 'Restauración'

        ];
    }

     public function getInterestsOptions() {

      //$intereses = Intereses::all();
      $intereses = Intereses::orderBy('name')->get();
      $result = collect();

      foreach ($intereses as $iintrs) {
        //$result->put($iintrs->id, ucwords($iintrs->name));
        $result->put($iintrs->id, $iintrs->name);
      }

      return $result;

    }

    public function getStringSlugInterest($slug){
       $i = Intereses::where('slug',$slug)->first();
        //if(count($i)>0){
        if($i){
            return $i->name;
        } else {
            return null;
        }
    }


    public function getVisitsOptions() {

      $tvisitas = Tiposvisitas::all();

      $result = collect();

      foreach ($tvisitas as $itvs) {
        $result->put($itvs->id, ucwords($itvs->name));
      }
      return $result;
    }

    public function getStringSlugTvisit($slug){
        $i = Tiposvisitas::where('slug',$slug)->first();
        //if(count($i)>0){
        if($i){    
            return $i->name;
        } else {
            return null;
        }
    }

    public function getInteresesById($id) {

        if(is_int($id)){
            $intereses = Intereses::find($id);
        } else {
             $intereses = Intereses::where('slug',$id)->first();        
        }
       
        //if(count($intereses)>0){
        if($intereses){
            return explode(' y ', $intereses->name);
        }else {
            return null;
        }
    }

    public function getInteresesId($id) {

        if(is_int($id)){
             $intereses = Intereses::find($id);   
        } else {
             $intereses = Intereses::where('slug',$id)->first();  
        }

        //if(count($intereses)>0){
        if($intereses){
            return $intereses->id;
        }else {
            return null;
        }
    }

     public function getTvisitaId($id) {
      
        if(is_int($id)){
             $tvisita = Tiposvisitas::find($id);   
        } else {
             $tvisita = Tiposvisitas::where('slug',$id)->first();  
        }

        //if(count($tvisita)>0){
        if($tvisita){
            return $tvisita->id;
        }else {
            return null;
        }
    }

    public function getTvisitaById($id) {
        
        if(is_int($id)){
             $tvisita = Tiposvisitas::find($id);   
        } else {
            $tvisita = Tiposvisitas::where('slug',$id)->first();       
        }

        //if(count($tvisita)>0){
        if($tvisita){
            return $tvisita->name;
        } else {
            return null;
        }


    }

    public function getTiposEmpresas() {

        $rtipos = collect() ;

        $tipos = Tipo::all();

        foreach ($tipos as $key => $value) {
            $rtipos->put($value->id,$value->name);
        }

        return $rtipos;

    }

    public function getTiposEmpresasFull() {

        $tipos = Tipo::all();

        return $tipos;

    }


    public function getTipoBySlug($slug) {

        $tipo = Tipo::where('slug',$slug)->first();

        if(isset($tipo->avatar)){
            $image = $tipo->avatar->getPath();
            $tipo->image = $image;
        }

        return $tipo;

    }

    public function beachList()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $beaches = $pages->where("is_hidden",0)->where("subtemplate","playas")->values();

        return $beaches;
    }

    public function beachFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $beach = $pages->where("is_hidden",0)->where("url",$url)->values();

        return $beach;
    }

    public function eventAll()
    {

        $now = Carbon::now()->format('Y-m-d');

        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $eventsVip = $pages->where("is_hidden",0)->where("template","eventos")->where('is_top',1)->values();
        $eventsNormal = $pages->where("is_hidden",0)->where("template","eventos")->where('is_top',0)->values();

        $resultVip = collect();
        $resultNormal = collect();

        $events = collect();

        $count = 0;

        foreach ($eventsVip as $event) {

            $event->scatg = $this->getEventsCategoriesById($event->category);

            if( (new DateTime($event->date_end))->format('Y-m-d') > $now && $count < 7){
                $resultVip->push($event);
                $count = $count+1;

            } elseif( (new DateTime($event->date_end))->format('Y-m-d') > $now && $count > 6){
                $resultNormal->push($event);
                $count = $count+1;
            }

        }

        foreach ($eventsNormal as $event) {

            $event->scatg = $this->getEventsCategoriesById($event->category);

            if( (new DateTime($event->date_end))->format('Y-m-d') > $now){
                $resultNormal->push($event);
                $count = $count+1;
            }
        }

        foreach ($resultVip as  $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $event->date = (new DateTime($event->date_start));
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesend = intval( (new DateTime($event->date_end))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
           
            $event->date_start_pretty_day = (new DateTime($event->date_start))->format('d');
            $event->date_start_pretty_month = $mesString[($mes)];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_start_pretty_numf = (new DateTime($event->date_start))->format('d/m');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');

            $event->date_end_pretty_day = (new DateTime($event->date_end))->format('d');
            $event->date_end_pretty_month = $mesString[($mesend)];
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');
            $event->date_end_pretty_numf = (new DateTime($event->date_end))->format('d/m');
            

        }

        $eventsVipOrder = $resultVip->sortBy('date');

        foreach ($resultNormal as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $event->date = (new DateTime($event->date_start));
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesend = intval( (new DateTime($event->date_end))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            
            $event->date_start_pretty_day = (new DateTime($event->date_start))->format('d');
            $event->date_start_pretty_month = $mesString[($mes)];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_start_pretty_numf = (new DateTime($event->date_start))->format('d/m');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');

            $event->date_end_pretty_day = (new DateTime($event->date_end))->format('d');
            $event->date_end_pretty_month = $mesString[($mesend)];
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');
            $event->date_end_pretty_numf = (new DateTime($event->date_end))->format('d/m');

        }

        $eventsNormalOrder = $resultNormal->sortBy('date');

        foreach ($eventsVipOrder as $event) {
           $events->push($event);
        }

        foreach ($eventsNormalOrder as $event) {
           $events->push($event);
        }

        return $events;
    }

    public function eventByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("template","eventos")->where('url', '/eventos/'.$name)->values();

        return $result;
    }

    public function rutaAll()
    {

        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $rutasVip = $pages->where("is_hidden",0)->where("template","rutas")->where('is_top',1)->values();
        $rutasNormal = $pages->where("is_hidden",0)->where("template","rutas")->where('is_top',0)->values();

        $resultVip = collect();
        $resultNormal = collect();

        $rutas = collect();

        $count = 0;

        foreach ($rutasVip as $ruta) {

            $ruta->scatg = $this->getRutasCategoriesById($ruta->category);

            if( $count < 7){
                $resultVip->push($ruta);
                $count = $count+1;

            } elseif( $count > 6){
                $resultNormal->push($ruta);
                $count = $count+1;
            }

        }

        foreach ($rutasNormal as $ruta) {

            $ruta->scatg = $this->getRutasCategoriesById($ruta->category);

            $resultNormal->push($ruta);
            $count = $count+1;

        }


        foreach ($resultVip as $ruta) {
           $rutas->push($ruta);
        }

        foreach ($resultNormal as $ruta) {
           $rutas->push($ruta);
        }

        return $rutas;
    }

    public function eventFind($category, $date_start, $date_end, $location)
    {

        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $events =  new \Illuminate\Support\Collection($pages);

        $validEvents = collect();

        $categoryOperator = '=';
        if($category == 'all'){
            $category = null;
            $categoryOperator = '!=';
        }

        $locationOperator = '=';
        if($location == 'all'){
            $location = null;
            $locationOperator = '!=';
        }

        $preEvents = $events->where("is_hidden",0)->where('template','eventos')->where('category',$categoryOperator,$category)->where('location',$locationOperator,$location)->values();


        foreach ($preEvents as $i) {

            $i->scatg = $this->getEventsCategoriesById($i->category);

            $eventDateStart = (new DateTime($i->date_start))->format('d-m-Y');
            $eventDateEnd = (new DateTime($i->date_end))->format('d-m-Y');

            $bs = new Carbon($date_start);
            $es = new Carbon($eventDateStart);

            $be = new Carbon($date_end);
            $ee = new Carbon($eventDateEnd);

            $diffStart = $bs->diffInDays($es,false);
            $diffStartEnd = $bs->diffInDays($ee,false);

            $diffEnd = $be->diffInDays($ee,false);
            $diffEndStart = $be->diffInDays($es,false);

            if($diffStart>=0  && $diffEnd<1 ) {

                $validEvents->push($i);

            } elseif ($diffStartEnd >= 0 && $diffStart <= 0){

                $validEvents->push($i);

            } elseif ($diffEndStart <= 0 && $diffEnd >=0 ){

                $validEvents->push($i);
            }

        }

        return $validEvents->values();

    }

    public function eventFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        //$event = $pages->where("is_hidden",0)->where("url",$url)->values();
        $event = $pages->where("url",$url)->values();


        $event[0]->date_start_pretty_num = (new DateTime($event[0]->date_start))->format('d.m.y');
        $event[0]->date_end_pretty_num = (new DateTime($event[0]->date_end))->format('d.m.y');

        return $event;
    }

    public function empresasFind($typeslug, $locationslug, $searchString){
        $typeOperator = '=';

        $gtype = Tipo::where('slug',$typeslug)->first();
        //if(count($gtype)>0){
        if($gtype){
            $type_id = $gtype->id;
        }

        if($typeslug == 'todos-los-tipos'){
            $type_id = null;
            $typeOperator = '!=';
        }

        $fempresas = Empresa::where('type_id',$typeOperator,$type_id)->get();
        $pempresas = collect();

        if($locationslug != 'todos-los-municipios'){

            $locations = explode('_', $locationslug);
            foreach ($locations as $iLocation) {
               foreach ($fempresas as $iEmpresa) {
                   if($iEmpresa->mslug == $iLocation){
                       $pempresas->push($iEmpresa);
                   }
               }

            }
        } else {

           $pempresas = $fempresas;
        }


        if($searchString != 'todas-las-empresas'){

            $ovalores = explode('_', $searchString);
            $valores = collect();

            $sempresas = collect();

            foreach ($ovalores as $valor) {
               if(strlen($valor)>=3){
                $valores->push($valor);
               }
            }

            $contador = 0;
            foreach ($pempresas as $iEmpresa) {

                $contador = 0;
                foreach ($valores as $valor) {

                    //if(strpos(strtolower($iEmpresa->name), strtolower($valor)) !== false) {
                    if(strpos(str_slug($iEmpresa->name), str_slug($valor)) !== false) {
                        $contador = $contador+1;
                    }
                }

                if($contador>0){
                    $iEmpresa->contador = $contador;
                    $sempresas->push($iEmpresa);
                }
            }

            if(count($sempresas)>0){
                $empresas = $sempresas->sortByDesc('contador');
            } else {
                $empresas = [];
            }

        } else {
            $empresas = $pempresas;
        }

        foreach ($empresas as $empresa) {

            if(isset($empresa->avatar)){
                $image = $empresa->avatar->getPath();
                $empresa->image = $image;
            }

            if(isset($empresa->photos)){
                $cphotos = collect();
                foreach ($empresa->photos as $photo) {
                    $cphotos->push($photo->getPath());
                }
                $empresa->images = $cphotos;
            }
        }

        return $empresas;
    }

    public function empresasFindPag($typeslug, $locationslug, $searchString, $pag = 1, $number = 1){


        $typeOperator = '=';

        $gtype = Tipo::where('slug',$typeslug)->first();
        //if(count($gtype)>0){
        if($gtype){
            $type_id = $gtype->id;
        }

        if($typeslug == 'todos-los-tipos'){
            $type_id = null;
            $typeOperator = '!=';
        }

        $fempresas = Empresa::where('type_id',$typeOperator,$type_id)->get();
        $pempresas = collect();

        if($locationslug != 'todos-los-municipios'){

            $locations = explode('_', $locationslug);

            foreach ($locations as $iLocation) {
               foreach ($fempresas as $iEmpresa) {
                   if($iEmpresa->mslug == $iLocation){
                       $pempresas->push($iEmpresa);
                   }
               }

            }
        } else {

           $pempresas = $fempresas;
        }

        if($searchString != 'todas-las-empresas'){

            $ovalores = explode('_', $searchString);
            $valores = collect();

            $sempresas = collect();

            foreach ($ovalores as $valor) {
               if(strlen($valor)>=3){
                $valores->push($valor);
               }
            }

            $contador = 0;
            foreach ($pempresas as $iEmpresa) {

                $contador = 0;
                foreach ($valores as $valor) {
                    //if(strpos(strtolower($iEmpresa->name), strtolower($valor)) !== false) {
                    if(strpos(str_slug($iEmpresa->name), str_slug($valor)) !== false) {
                        $contador = $contador+1;
                    }
                }

                if($contador>0){
                    $iEmpresa->contador = $contador;
                    $sempresas->push($iEmpresa);
                }
            }

            if(count($sempresas)>0){
                $empresas = $sempresas->sortByDesc('contador');
            } else {
                $empresas = [];
            }

        } else {
            $empresas = $pempresas;
        }


        foreach ($empresas as $empresa) {

            if(isset($empresa->avatar)){
                $image = $empresa->avatar->getPath();
                $empresa->image = $image;
            }

            if(isset($empresa->photos)){
                $cphotos = collect();
                foreach ($empresa->photos as $photo) {
                    $cphotos->push($photo->getPath());
                }
                $empresa->images = $cphotos;
            }
        }

        if(count($empresas)>0){
            $pagination = $empresas->slice((($pag-1)*$number),$number);
        } else {
            $pagination = $empresas;
        }


        return $pagination;
    }

    public function empresasFindCount($typeslug, $locationslug, $searchString){
        return count($this->empresasFind($typeslug, $locationslug, $searchString));
    }

    public function empresasFindByType($typeslug){

        $type = Tipo::where('slug',$typeslug)->first();

        $empresas = Empresa::where('type_id',$type->id)->get();

        foreach ($empresas as $empresa) {

            if(isset($empresa->avatar)){
                $image = $empresa->avatar->getPath();
                $empresa->image = $image;
            }

            if(isset($empresa->photos)){
                $cphotos = collect();
                foreach ($empresa->photos as $photo) {
                    $cphotos->push($photo->getPath());
                }
                $empresa->images = $cphotos;
            }
        }

        return $empresas;
    }

    public function empresasFindByTypePag($typeslug, $pag = 1, $number = 1){

        $type = Tipo::where('slug',$typeslug)->first();

        $empresas = Empresa::where('type_id',$type->id)->get();

        foreach ($empresas as $empresa) {

            if(isset($empresa->avatar)){
                $image = $empresa->avatar->getPath();
                $empresa->image = $image;
            }

            if(isset($empresa->photos)){
                $cphotos = collect();
                foreach ($empresa->photos as $photo) {
                    $cphotos->push($photo->getPath());
                }
                $empresa->images = $cphotos;
            }
        }

        $pagination = $empresas->slice((($pag-1)*$number),$number);

        return $pagination;
    }

    public function empresasFindTypeCount($typeslug){
        return count($this->empresasFindByType($typeslug));
    }



    public function empresasFindBySlug($slug){

        $empresa = Empresa::where('slug',$slug)->first();

        if(isset($empresa->avatar)){
            $image = $empresa->avatar->getPath();
            $empresa->image = $image;
        }

        if(isset($empresa->photos)){
            $cphotos = collect();
            foreach ($empresa->photos as $photo) {
                $cphotos->push($photo->getPath());
            }
            $empresa->images = $cphotos;
        }

        return $empresa;
    }

    public function empresasListTypesHomeIndex(){

        $result = collect();
        $cat1 = collect();
        $cat2 = collect();
        $cat3 = collect();
        $result->put('cat1',$cat1);
        $result->put('cat2',$cat2);
        $result->put('cat3',$cat3);

        $types = Tipo::all();

        foreach ($types as $type) {

            if(isset($type->avatar)){
                $image = $type->avatar->getPath();
                $type->image = $image;
            }

            if($type->category == 'Planificar mi viaje'){
                $cat1->push($type);
            } else if($type->category == 'Planes de ocio'){
                $cat2->push($type);
            } else if($type->category == 'Otros intereses'){
                $cat3->push($type);
            }
        }


        return $result;
    }

    public function rutaFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        //$ruta = $pages->where("is_hidden",0)->where("url",$url)->values();
        $ruta = $pages->where("url",$url)->values();
        return $ruta;
    }

    public function eventList()
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $events = $pages->where("is_hidden",0)->where("template","eventos");

        foreach ($events as $event) {
            $event->date_start_ppretty = (new DateTime($event->date_start))->format('d');
            $mes = intval( (new DateTime($event->date_start))->format('m') )-1;
            $mesString = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',];
            $event->date_start_pretty = $event->date_start_ppretty.' '.$mesString[$mes];
            $event->date_start_pretty_num = (new DateTime($event->date_start))->format('d.m.y');
            $event->date_end_pretty_num = (new DateTime($event->date_end))->format('d.m.y');
        }

        return $events;

    }


    public function municipalitiesList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","municipios")->sortBy('title')->values();

        return $result;
    }

    public function municipalityByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","municipios")->where('url', '/municipios/'.$name)->values();

        return $result;
    }

    public function regionsList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = collect();
        foreach ($list as $value) {
            if (strpos($value->url, '/comarcas/') !== false) {
                $result->push($value);
            }
        }

        return $result;
    }

    public function regionByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where('url','/comarcas/'.$name)->values();

        return $result;
    }

    public function beachesList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","playas")->sortBy('title')->values();

        return $result;
    }

    public function beachByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("subtemplate","playas")->where('url', '/playas/'.$name)->values();

        return $result;
    }

    public function experienceList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $experiences =  new \Illuminate\Support\Collection($pages);

        $result = $experiences->where("is_hidden",0)->where("template","experiences");

        return $result;
    }

    public function experienceByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("template","experiences")->where('url', '/experiencias/'.$name)->values();

        return $result;
    }

     public function experienceFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        //$experience = $pages->where("is_hidden",0)->where("url",$url)->values();
        $experience = $pages->where("url",$url)->values();

        return $experience;
    }

    public function experienceFind($days,$interest,$tvisit)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $experiences =  new \Illuminate\Support\Collection($pages);

        $daysOperator = '=';
        if($days == 'all' || $days == 'dejate-llevar'){
            $days = 0;
            $daysOperator = '>';
        }

        $interestOperator = '=';
        if($interest == 'all' || $interest == 'todos los intereses' ){
            $interest = null;
            $interestOperator = '!=';
        }

        $tvisitOperator = '=';
        if($tvisit == 'all' || $tvisit == 'todo cadiz'){
            $tvisit = null;
            $tvisitOperator = '!=';
        }

        $result = $experiences->where("is_hidden",0)->where('template','experiences')->where('days',$daysOperator,$days)->where('interest',$interestOperator,strtolower($interest))->where('tvisit',$tvisitOperator,strtolower($tvisit))->values();

        foreach ($result as $i) {

            $iintrst = $this->getInteresesById($i->interest*1);

            if(count($iintrst)>0){
            //if($iintrst){
                $i->sintrst1 = $iintrst[0];
                $i->sintrst2 = $iintrst[1];
            } else {
                $i->sintrst1 = null;
                $i->sintrst2 = null;
            }

            $itvisit = $this->getTvisitaById($i->tvisit*1);
            //if(count($itvisit)>0){
            if($itvisit){    
                $i->stvisit = $itvisit;
            }
        }

        return $result;
    }

    public function rutasList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("template","rutas")->sortBy('title')->values();

        return $result;
    }

    public function rutaByName($name)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);

        $result = $list->where("is_hidden",0)->where("template","rutas")->where('url', '/rutas/'.$name)->values();

        return $result;
    }

    public function rutaFind($category, $days, $location)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $rutas =  new \Illuminate\Support\Collection($pages);

        $categoryOperator = '=';
        if($category == 'all'){
            $category = null;
            $categoryOperator = '!=';
        }

        $daysOperator = '=';
        if($days == 'all'){
            $days = '0';
            $daysOperator = '>';
        }

        $locationOperator = '=';
        if($location == 'all'){
            $location = null;
            $locationOperator = '!=';
        }

        $result = $rutas->where("is_hidden",0)->where('template','rutas')->where('category',$categoryOperator,$category)->where('days',$daysOperator,$days)->where('location',$locationOperator,$location)->values();

        foreach ($result as $i) {
           $i->scatg = $this->getRutasCategoriesById($i->category);
        }

        return $result;
    }

    public function playaFind($type, $categories, $location)
    {
        $result = collect();
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $playas =  new \Illuminate\Support\Collection($pages);

        $typeOperator = '=';
        if($type == 'all'){
            $type = null;
            $typeOperator = '!=';
        }

        $locationOperator = '=';
        if($location == 'all'){
            $location = null;
            $locationOperator = '!=';
        }

        $preResult = $playas->where("is_hidden",0)->where('subtemplate','playas')->where('categoriea',$typeOperator,$type)->where('municipio',$locationOperator,$location)->values();

        if($categories != 'all'){

            $aCategories = explode("_", $categories);

            foreach ($preResult as $i) {
                $pass = true;
                foreach ($aCategories as $category) {
                    if($pass == true){
                        if(strpos($i->categorieb, $category)!==false){
                            $result->push($i);
                            $pass = false;
                        }
                    }      
                }   
            }
        } else {
            $result = $preResult;
        }

        return $result;
    }



    public function sendMailExperience($mail, $url) {

        $contactName ='Cadiz Turismo';
        $sendContact ='noreply@cadizturismo.es';
        $sendTo =  $mail;

        $experience = $this->experienceFindByUrl($url);

        //.config('app.urlApp').
        //
        $baseHtml = '
        <meta charset="utf-8"/>


        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="'.config('app.urlApp').'plugins/rainlab/pages/assets/css/style-event.css"/>
        <style>

          .background-image {
            position: absolute !important;
            width: 100%;
            object-fit: cover !important;
            object-position: center !important;
            height: 700px !important;
            text-align: center !important;
          }

        .header-txt, .txt, .header-container {
          text-align: center !important;
          font-size: 100px !important;
          font-weight: 500;
          text-transform: uppercase;
          width: 100% !important;
        }

        .header-event {
          text-align: center !important;
          height: 700px;
        }

        h1 {
          width: 100%;
          text-align: center;
          margin-top: 170px;
        }
        .header-experience {
          width: 100%;
          text-align: center;
        }
          .brush {
            display: none !important;
          }
                .section-txt, .section-img, .header-event {
                    display:block!important;
                    border: solid 1px white!important;

                }

                .section-txt {
                  padding-top: 80px !important;
                  padding-bottom: 40px !important;
                }

                .section-txt .txt-container .desc, .section-txt .txt-container p {
                    display: block!important;
                    font-size: 28px !important;
                    line-height: 36px !important;
                    margin-bottom: 20px !important;
               }

                .section-txt .txt-container .title {
                    display: block!important;
                    font-size: 64px !important;
                    font-weight: 700 !important;
                    line-height: 60px !important;
                    margin-bottom: 20px !important;
               }

               .mock-insert {
                 display: none;
               }

                .section-txt .big-number-container, .section-txt .txt-container, .section-txt .big-number-container span, .section-txt .txt-container p {
                    display: inline-block!important;
                }

                .section-txt .big-number-container {
                    display: none !important;
                }

                .section-txt .txt-container {
                    margin: 20px 0px !important;
                    width: 100% !important;
                    max-width: none !important;
                }

                .event-features::after {
                  content: none !important;
                }

                .event-features {
                  background-color: black !important;
                  display: inline-block !important;
                  text-align: center !important;
                }

                .event-features .feature-exp {
                  display: inline-block !important;
                  margin-top: 50px !important;
                }

                .section-txt .txt-container .municipios {
                  margin-top: 50px !important;
                }

                .section-txt .txt-container .municipios a  {
                  margin-top: 10px !important;
                  margin-bottom: 0px !important;
                }

                .section-txt .txt-container .municipios img  {
                  display: none !important;
                }

        </style>
        ';

        $footerHtml = '
            <table cellspacing="0" cellpadding="0" border="0" align="center" style="width:100%; height: 94px;">
                <tr>
                    <td align="center" valign="middle" style="width: 100%; height: 100%;">
                        <p style="width: 100%; text-align: center; color: #9B9B9B; font-size: 25px; margin-top: 54px;"> <a href="http://cadizturismo.jekyllme.com" style="text-decoration: none; color: #4A4A4A; font-weight: 700" >www.cadizturismo.com</a> | Patronato Provincial de Turismo de Cádiz</p>
                    </td>
                </tr>
            </table>
        ';

        $preexperiencemarkup = $baseHtml.$experience[0]['markup'].$footerHtml;

        $preexperiencemarkup2 = str_replace('.svg', '.png', $preexperiencemarkup);

        $preexperiencemarkup3 = str_replace('</p>', '</p><br/><br/>', $preexperiencemarkup2);

        $experiencemarkup = str_replace('/storage/', config('app.urlApp').'storage/', $preexperiencemarkup3);

        $urlApp = config('app.urlApp');

        $data = array('experiencemarkup' => $experiencemarkup );

        $pdf_data = PDFS::loadHTML($experiencemarkup)
            ->setPaper('a4')
            ->output();

        $experience[0]['urlApp'] = $urlApp;

        $dataexperience = $experience[0];

        $dataemail = array('experience' => $dataexperience);

        Mail::send('rainlab.pages::mail.experience', $dataemail, function($message) use ($pdf_data, $contactName, $sendContact, $sendTo, $dataexperience)
        {
            $message->from($sendContact, $contactName);
            $message->to($sendTo);
            $message->subject('Tu experiencia en Cadiz Turismo');
            $message->attachData($pdf_data, $dataexperience['title'].'.pdf');

        });
    }

    public function publicationList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publications =  new \Illuminate\Support\Collection($pages);

        $result = $publications->where("is_hidden",0)->where("subtemplate","publicaciones")->sortByDesc('created_at')->values();

        return $result;
    }

    public function publicationListCount(){
        return count($this->publicationList());
    }

    public function publicationListPag($pag = 1, $number = 1)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publications =  new \Illuminate\Support\Collection($pages);

        $result = $publications->where("is_hidden",0)->where("subtemplate","publicaciones")->sortByDesc('created_at')->values();

        $pagination = $result->slice((($pag-1)*$number),$number);

        return $pagination;
    }


    public function getNewPaisString($pais){
        $paises = [
            'alemania' => 'alemania',
            'argentina' => 'argentina',
            'australia' => 'australia',
            'austria' => 'austria',
            'brasil' => 'brasil',
            'belgica' => 'bélgica',
            'canada' => 'canadá',
            'china' => 'china',
            'costa_rica' => 'costa rica',
            'dinamarca' => 'dinamarca',
            'españa' => 'españa',
            'estados_unidos' => 'estados unidos', 
            'estonia' => 'estonia',
            'finlandia' => 'finlandia',
            'francia' => 'francia',
            'holanda' => 'holanda',
            'hungria' => 'hungría',
            'irlanda' => 'irlanda',
            'israel' => 'israel',
            'italia' => 'italia',
            'japon' => 'japón',
            'mexico' => 'méxico',
            'noruega' => 'noruega',
            'polonia' => 'polonia',
            'portugal' => 'portugal',
            'reino_unido' => 'reino unido',
            'republica_checa' => 'república checa',
            'rusia' => 'rusia',
            'singapur' => 'singapur',
            'suecia' => 'suecia',
            'suiza' => 'suiza',
            'ucrania' => 'ucrania'
        ];
        
        return $paises[$pais];
    }

    public function newList($pais)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $news =  new \Illuminate\Support\Collection($pages);

        $result = $news->where("is_hidden",0)->where("subtemplate","sala-prensa-prensa")->where("pais",$pais)->values();

        return $result;
    }

    public function newListCount($pais){
        return count($this->newList($pais));
    }

    public function newListPag($pais, $pag = 1, $number = 1)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $news =  new \Illuminate\Support\Collection($pages);

        $result = $news->where("is_hidden",0)->where("subtemplate","sala-prensa-prensa")->where("pais",$pais)->values();

        $pagination = $result->slice((($pag-1)*$number),$number);

        return $pagination;
    }


    public function reportList()
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $reports =  new \Illuminate\Support\Collection($pages);

        $result = $reports->where("is_hidden",0)->where("subtemplate","sala-prensa-reportajes")->values();

        return $result;
    }

    public function reportListCount(){
        return count($this->reportList());
    }

    public function reportListPag($pag = 1, $number = 1, $lang)
    {
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $reports =  new \Illuminate\Support\Collection($pages);
       
        $rreports = collect();
        $results = $reports->where("is_hidden",0)->where("subtemplate","sala-prensa-reportajes")->sortByDesc('dateReportaje')->values();
    
        if($lang != 'es'){

            foreach ($results as $key => $result) {
                $vbo = $result->settings['components']['viewBag'];
                $vb = $result->viewBag;
               
                if($vbo['title'] != $vb['title'] && $vbo['descrptn'] != $vb['descrptn']){
                   $rreports->push($result);
                }
            }          
            $results = $rreports;
        } 
           
        $pagination = $results->slice((($pag-1)*$number),$number);

        return $pagination;
    }

    public function staticsFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $staticPages = collect();


        foreach ($pages as $value) {
            if (strpos($value->url, $url) !== false) {
                $staticPages->push($value);
            }
        }

        return $staticPages;
    }

   // sort ok
    public function getNewsIdiomasOptions(){
        return [
            'aleman' => 'ALEMÁN',
            'checo' => 'CHECO',
            'chino' => 'CHINO',
            'danes' => 'DANÉS',
            'espanol' => 'ESPAÑOL',
            'estonio' => 'ESTONIO',
            'finlandes' => 'FINLANDÉS',
            'flamenco' => 'FLAMENCO',
            'frances' => 'FRANCÉS',
            'hebreo' => 'HEBREO',
            'hispanoamerica' => 'HISPANOAMÉRICA',
            'holandes' => 'HOLANDÉS',
            'hungaro' => 'HÚNGARO',
            'ingles' => 'INGLÉS',
            'italiano' => 'ITALIANO',
            'japones' => 'JAPONÉS',
            'noruego' => 'NORUEGO',
            'polaco' => 'POLACO',
            'portugues' => 'PORTUGUÉS',
            'ruso' => 'RUSO',
            'sueco' => 'SUECO',
            'ucraniano' => 'UCRANIANO'
        ];
    }

    // sort ok
    public function getPublicationsType(){
        return [
            'guía' => 'Guía',
            'mapa' => 'Mapa',
            'vídeo' => 'Vídeo'

        ];
    }

    // sort ok
    public function getPublicationsInterests(){
        return [
            'aventura' => 'Aventura',
            'cultura' => 'Cultura',
            'gastronomía' => 'Gastronomía',
            'naturaleza' => 'Naturaleza',
            'playa' => 'Playa',
            'tradición' => 'Tradición'

        ];
    }

    public function publicacionesFindPag($search, $type, $interests, $lang, $pag = 1, $number = 1){
        
        if($type == 'video'){
            $type = 'vídeo';
        }
        if($type == 'guia'){
            $type = 'guía';
        }

        $lang = strtoupper($lang);

        if($lang == 'ESPANOL'){
            $lang = 'ESPAÑOL';
        }   

        if($lang == 'ALEMAN'){
            $lang = 'ALEMÁN';
        }   
        if($lang == 'DANES'){
            $lang = 'DANÉS';
        }   
        if($lang == 'FINLANDES'){
            $lang = 'FINLANDÉS';
        }   
        if($lang == 'FRANCES'){
            $lang = 'FRANCÉS';
        }   
        if($lang == 'HISPANOMERICA'){
            $lang = 'HISPANOMÉRICA';
        }   
        if($lang == 'HOLANDES'){
            $lang = 'HOLANDÉS';
        }   
        if($lang == 'HUNGARO'){
            $lang = 'HÚNGARO';
        }   
        if($lang == 'INGLES'){
            $lang = 'INGLÉS';
        }   
        if($lang == 'JAPONES'){
            $lang = 'JAPONÉS';
        }   
        if($lang == 'PORTUGUES'){
            $lang = 'PORTUGUÉS';
        }

        if($lang == 'TODOS-LOS-IDIOMAS'){
            $lang = 'all';           
        }

        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publicaciones =  new \Illuminate\Support\Collection($pages);

        $typeOperator = '=';
        if($type == 'todos-los-tipos'){
            $type = null;
            $typeOperator = '!=';
        }

        $results = $publicaciones->where("is_hidden",0)->where('subtemplate','publicaciones')->where('type',$typeOperator,$type)->values();
        
        if($lang != 'all'){
            foreach ($results as $key => $result) {
                if(strpos($result->idiomas, $lang)!==false){
                } else {
                    $results->forget($key);
                }
            }
        }

        if($interests != 'todos-los-intereses'){
            $aInterests = explode("_", $interests);
            foreach ($results as $key => $result) {
                $forget = true;
                foreach ($aInterests as $interest) {
                    if($forget == true){
                        if(strpos($result->interests, $interest)!==false){                            
                            $forget = false;
                        }
                    }      
                }
                if($forget == true){
                    $results->forget($key);
                }
            }
        }
        if($search != 'todas-las-publicaciones'){
            $aSearchs = explode("_", $search);
            foreach ($aSearchs as $key => $value) {
                if(strlen($value)<4){
                    unset($aSearchs[$key]);
                }
            }
            foreach ($results as $key => $result) {
                $forget = true;
                foreach ($aSearchs as $search) {
                    if($forget == true){
                        if(strpos(str_slug($result->title), str_slug($search))!==false){                            
                            $forget = false;
                        }
                        if(strpos(str_slug($result->descrptn), str_slug($search))!==false){                            
                            $forget = false;
                        }
                    }      
                }
                if($forget == true){
                    $results->forget($key);
                }
            }
        }        
        if(count($results)>0){
            $pagination = $results->slice((($pag-1)*$number),$number);
        } else {
            $pagination = $results;
        }

        return $pagination;
    }
    public function publicacionesFindC($search, $type, $interests, $lang){
        

        if($type == 'video'){
            $type = 'vídeo';
        }
        if($type == 'guia'){
            $type = 'guía';
        }

        $lang = strtoupper($lang);

        if($lang == 'ESPANOL'){
            $lang = 'ESPAÑOL';
        } 
        
        if($lang == 'ALEMAN'){
            $lang = 'ALEMÁN';
        }   
        if($lang == 'DANES'){
            $lang = 'DANÉS';
        }   
        if($lang == 'FINLANDES'){
            $lang = 'FINLANDÉS';
        }   
        if($lang == 'FRANCES'){
            $lang = 'FRANCÉS';
        }   
        if($lang == 'HISPANOMERICA'){
            $lang = 'HISPANOMÉRICA';
        }   
        if($lang == 'HOLANDES'){
            $lang = 'HOLANDÉS';
        }   
        if($lang == 'HUNGARO'){
            $lang = 'HÚNGARO';
        }   
        if($lang == 'INGLES'){
            $lang = 'INGLÉS';
        }   
        if($lang == 'JAPONES'){
            $lang = 'JAPONÉS';
        }   
        if($lang == 'PORTUGUES'){
            $lang = 'PORTUGUÉS';
        }

        if($lang == 'TODOS-LOS-IDIOMAS'){
            $lang = 'all';           
        }

        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publicaciones =  new \Illuminate\Support\Collection($pages);

        $typeOperator = '=';
        if($type == 'todos-los-tipos'){
            $type = null;
            $typeOperator = '!=';
        }

        $results = $publicaciones->where("is_hidden",0)->where('subtemplate','publicaciones')->where('type',$typeOperator,$type)->values();
        
        if($lang != 'all'){
            foreach ($results as $key => $result) {
                if(strpos($result->idiomas, $lang)!==false){
                } else {
                    $results->forget($key);
                }
            }
        }

        if($interests != 'todos-los-intereses'){
            $aInterests = explode("_", $interests);
            foreach ($results as $key => $result) {
                $forget = true;
                foreach ($aInterests as $interest) {
                    if($forget == true){
                        if(strpos($result->interests, $interest)!==false){                            
                            $forget = false;
                        }
                    }      
                }
                if($forget == true){
                    $results->forget($key);
                }
            }
        }

        if($search != 'todas-las-publicaciones'){
            $aSearchs = explode("_", $search);
            foreach ($aSearchs as $key => $value) {
                if(strlen($value)<4){
                    unset($aSearchs[$key]);
                }
            }
            foreach ($results as $key => $result) {
                $forget = true;
                foreach ($aSearchs as $search) {
                    if($forget == true){
                        if(strpos(str_slug($result->title),str_slug($search))!==false){                            
                            $forget = false;
                        }
                        if(strpos(str_slug($result->descrptn), str_slug($search))!==false){                            
                            $forget = false;
                        }
                    }      
                }
                if($forget == true){
                    $results->forget($key);
                }
            }
        }
        
        return count($results);
    }

     public function publicacionesFind($search, $type, $interests, $lang){

        $result = collect();
        $theme = Theme::getActiveTheme();
        $pages = Page::listInTheme($theme, false);
        $publicaciones =  new \Illuminate\Support\Collection($pages);

        $typeOperator = '=';
        if($type == 'todos-los-tipos'){
            $type = null;
            $typeOperator = '!=';
        }

        $langOperator = '=';
        if($lang == 'todos-los-idiomas'){
            $lang = null;
            $langOperator = '!=';
        }

        $preResult = $publicaciones->where("is_hidden",0)->where('subtemplate','publicaciones')->where('type',$typeOperator,$type)->where('idiomas',$langOperator,$lang)->values();

        if($interests != 'todos-los-intereses'){
            $aInterests = explode("_", $interests);
            foreach ($preResult as $i) {
                $pass = true;
                foreach ($aInterests as $interest) {
                    if($pass == true){
                        if(strpos($i->interests, $interest)!==false){
                            $result->push($i);
                            $pass = false;
                        }
                    }      
                }   
            }
        } else {
            $result = $preResult;
        }      
        
        return $result;
    }

    public function publicacionesFindCount($search, $type, $interests, $lang){
        return count($this->publicacionesFind($search, $type, $interests, $lang));
    }

    public function reportFindByUrl($url)
    {
        $theme = Theme::getActiveTheme();
        $pagesList = Page::listInTheme($theme, false);
        $pages =  new \Illuminate\Support\Collection($pagesList);

        $report = $pages->where("is_hidden",0)->where("url",$url)->values();
        return $report;
    }

}
