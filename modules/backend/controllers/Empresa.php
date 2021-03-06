<?php namespace Backend\Controllers;

use Backend\Classes\Controller;

/**
 * Backend user controller
 *
 *
 * @author Andrés Martínez
 *
 */
class Empresa extends Controller
{
    /**
     * @var array Extensions implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var array `FormController` configuration.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var array `ListController` configuration.
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var string HTML body tag class
     */
    public $bodyClass = 'compact-container';

    /**
     * Constructor.
     */
    public function __construct()
    {        
        parent::__construct();
    }

    /**
     * Update controller
     */
    public function update($recordId, $context = null)
    {
        return $this->asExtension('FormController')->update($recordId, $context);
    }

    public function formAfterSave($model)
    {
        $model->update(['slug' => str_slug($model->name)]);
        $model->update(['mslug' => str_slug($model->municipality)]);
        if($model->url_map == ''){
            $baseUrl = 'https://www.google.es/maps/place/';
            $direcc = str_replace(' ','+',$model->direccion);
            $baseUrl2 = $baseUrl.$direcc.',+';
            $cp = '';
            if($model->cp!=''){
                $cp = $model->cp.',+';
            }
            $baseUrl3 = $baseUrl2.$cp;
            $muni = str_replace(' ','+',$model->municipality);
            $baseUrl4 = $baseUrl3.$muni;
            $model->update(['url_map' => $baseUrl4]);
        }
    }


}
