<?php namespace Backend\Models;

use Mail;
use Event;
use Backend;
use Model;

/**
 * Administrator user model
 *
 * @package october\backend
 * @author Andrés Martínez
 */
class Catgeventos extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'catgeventos';

    protected $fillable = ['slug'];

    public $translatable = [
        'name'
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
    ];

    public $attachOne = [
        
    ];

    

   
    /**
     * After create
     * @return void
     */
    public function afterCreate()
    {
        
    }

}
