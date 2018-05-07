<?php namespace Backend\Models;

use Mail;
use Event;
use Backend;
use Model;
use \Backend\Models\Tipo;
use \Backend\Models\CatAlminar;
use Illuminate\Http\JsonResponse;
use \Backend\Models\Empresad;
/**
 * Administrator user model
 *
 *
 *
 */
class Empresa extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'empresas';

    protected $fillable = ['slug','mslug','url_map'];

    public $translatable = [
        'title',
        'description',
        'info'
    ];

    public static function boot()
    {
        // Call default functionality (required)
        parent::boot();

        // Check the translate plugin is installed
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            return;

        // Extend the constructor of the model
        self::extend(function($model){
            // Implement the translatable behavior
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';

        });
    }

    /**
     * Validation rules
     */
    public $rules = [
    ];

    /**
     * Relations
     */
    public $belongsToMany = [
    ];

    public $belongsTo = [
        'type' => \Backend\Models\Tipo::class
    ];

    public $attachOne = [
        'avatar' => \System\Models\File::class
    ];

    public $attachMany = [
        'photos' => \System\Models\File::class
    ];
    

    /**
     * Returns the public image file path to this user's avatar.
     */
    public function getAvatarThumb($size = 25, $options = null)
    {
        if (is_string($options)) {
            $options = ['default' => $options];
        }
        elseif (!is_array($options)) {
            $options = [];
        }

        // Default is "mm" (Mystery man)
        $default = array_get($options, 'default', 'mm');

        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        }
        else {
            return '//www.gravatar.com/avatar/' .
                md5(strtolower(trim($this->email))) .
                '?s='. $size .
                '&d='. urlencode($default);
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

    public function getCatAlminar() {

        $rtipos = collect() ;

        $tipos = CatAlminar::all();
       
        foreach ($tipos as $key => $value) {            
            $rtipos->put($value->id,$value->nivel2);
        }
       
        return $rtipos;

    }

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
        ];
    }

    /**
     * After create
     * @return void
     */
    public function afterCreate()
    {
    }

    public function beforeDelete()
    {       
       //$this->image->delete();
       $sEmpresa = new Empresad();
       $sEmpresa->slug = $this->slug;
       $sEmpresa->type_id = $this->type_id;
       $sEmpresa->name = $this->name;
       $sEmpresa->tlf = $this->tlf;
       $sEmpresa->tlf2 = $this->tlf2;
       $sEmpresa->fax = $this->fax;
       $sEmpresa->cp = $this->cp;
       $sEmpresa->email = $this->email;
       $sEmpresa->email2 = $this->email2;
       $sEmpresa->municipality = $this->municipality;
       $sEmpresa->mslug = $this->mslug;
       $sEmpresa->url_map = $this->url_map;
       $sEmpresa->title = $this->title;
       $sEmpresa->description = $this->description;
       $sEmpresa->info = $this->info;
       $sEmpresa->extract = $this->extract;
       $sEmpresa->site = $this->site;
       $sEmpresa->direccion = $this->direccion;
       $sEmpresa->movil = $this->movil;
       $sEmpresa->save();
    }

}
