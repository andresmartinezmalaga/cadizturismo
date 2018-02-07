<?php

// Andrés Martínez : routes municipalities
Route::get('/api/municipios', 'Backend\Classes\CadizTurismoController@municipalitiesList');
Route::get('/api/municipios/{name}', 'Backend\Classes\CadizTurismoController@municipalityByName');

// Andrés Martínez : routes regions
Route::get('/api/comarcas/{name}', 'Backend\Classes\CadizTurismoController@regionByName');

// Andrés Martínez : routes beaches
Route::get('/api/playas/{name}', 'Backend\Classes\CadizTurismoController@beachByName');

// Andrés Martínez : routes rutas
Route::get('/api/rutas/{category}/{days}/{location}', 'Backend\Classes\CadizTurismoController@rutaFind');

// Andrés Martínez : eventos rutas
Route::get('/api/eventos/{category}/{date_start}/{date_end}/{location}', 'Backend\Classes\CadizTurismoController@eventFind');

// Andrés Martínez : experiencias rutas
Route::get('/api/experiencias/{days}/{interest}/{tvisit}', 'Backend\Classes\CadizTurismoController@experienceFind');

/**
 * Register Backend routes before all user routes.
 */
App::before(function ($request) {
    
    /*
     * Extensibility
     */
    Event::fire('backend.beforeRoute');

    /*
     * Other pages
     */
    Route::group([
            'middleware' => ['web'],
            'prefix' => Config::get('cms.backendUri', 'backend')
        ], function () {
            Route::any('{slug}', 'Backend\Classes\BackendController@run')->where('slug', '(.*)?');
        })
    ;


    /*
     * Entry point
     */
    Route::any(Config::get('cms.backendUri', 'backend'), 'Backend\Classes\BackendController@run')->middleware('web');

    /*
     * Extensibility
     */
    Event::fire('backend.route');
});
