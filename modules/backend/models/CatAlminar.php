<?php namespace Backend\Models;

use Mail;
use Event;
use Backend;
use Model;

/**
 * Administrator user model
 *
 *
 * @author Andrés Martínez
 */
class CatAlminar extends Model
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'catAlminar';

    protected $fillable = [];

    public $translatable = [];

    public static function boot()
    {
        // Call default functionality (required)
        parent::boot();
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

    public $attachOne = [];
    
    /**
     * After create
     * @return void
     */
    public function afterCreate()
    {        
    }

}
