<?php namespace Backend\Models;

use Mail;
use Event;
use Backend;
use Model;
use \Backend\Models\Tipo;
use Illuminate\Http\JsonResponse;
/**
 * Administrator user model
 *
 *
 *
 */
class Empresad extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'empresasd';

    protected $fillable = [
        'slug',
        'type_id',
        'name',
        'tlf',
        'tlf2',
        'fax',
        'cp',
        'email',
        'email2',
        'municipality',
        'mslug',
        'url_map',
        'title',
        'description',
        'info',
        'extract',
        'site',
        'direccion',
        'movil'
    ];

    

    public static function boot()
    {
        // Call default functionality (required)
        //parent::boot();

        // Check the translate plugin is installed
        //if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            //return;

        // Extend the constructor of the model
        //self::extend(function($model){
            // Implement the translatable behavior
            //$model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';

        //});
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
    ];

    public $attachOne = [        
    ];

    public $attachMany = [        
    ];

}
