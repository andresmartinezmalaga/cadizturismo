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
class Tipo extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'tipos';

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
        'avatar' => \System\Models\File::class
    ];

    public function getCategoriasEmpresas(){
        return [
        'Planificar mi viaje' => 'Planificar mi viaje',
        'Planes de ocio' => 'Planes de ocio',
        'Otros intereses' => 'Otros intereses'
        ];
    }

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

    /**
     * After create
     * @return void
     */
    public function afterCreate()
    {

    }

}
