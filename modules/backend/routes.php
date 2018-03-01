<?php

// Andrés Martínez : routes municipalities
Route::get('/api/municipios', 'Backend\Classes\CadizTurismoController@municipalitiesIndex');
Route::get('/api/municipios/{name}', 'Backend\Classes\CadizTurismoController@municipalityByName');

// Andrés Martínez : routes regions
Route::get('/api/comarcas', 'Backend\Classes\CadizTurismoController@regionsIndex');
Route::get('/api/comarcas/{name}', 'Backend\Classes\CadizTurismoController@regionByName');

// Andrés Martínez : routes beaches
Route::get('/api/playas', 'Backend\Classes\CadizTurismoController@beachesIndex');
Route::get('/api/playas/{name}', 'Backend\Classes\CadizTurismoController@beachByName');

// Andrés Martínez : routes rutas
Route::get('/api/rutas', 'Backend\Classes\CadizTurismoController@rutasIndex');
Route::get('/api/rutas/{name}', 'Backend\Classes\CadizTurismoController@rutaByName');
Route::get('/api/rutas/opciones/categorias', 'Backend\Classes\CadizTurismoController@rutasCategories');
Route::get('/api/rutas/opciones/ubicacion', 'Backend\Classes\CadizTurismoController@municipalitiesList');
Route::get('/api/rutas/{category}/{days}/{location}', 'Backend\Classes\CadizTurismoController@rutaFind');

// Andrés Martínez : routes eventos
Route::get('/api/eventos', 'Backend\Classes\CadizTurismoController@eventsIndex');
Route::get('/api/eventos/opciones/categorias', 'Backend\Classes\CadizTurismoController@eventsCategories');
Route::get('/api/eventos/opciones/ubicacion', 'Backend\Classes\CadizTurismoController@municipalitiesList');
Route::get('/api/eventos/{category}/{date_start}/{date_end}/{location}', 'Backend\Classes\CadizTurismoController@eventFind');


// Andrés Martínez : routes experiencias
Route::get('/api/experiencias/opciones/intereses', 'Backend\Classes\CadizTurismoController@experienceInterests');
Route::get('/api/experiencias/opciones/tipo-visita', 'Backend\Classes\CadizTurismoController@experienceTVisit');
Route::get('/api/experiencias/{days}/{interest}/{tvisit}', 'Backend\Classes\CadizTurismoController@experienceFind');

// Andrés Martínez : routes statics
Route::get('/api/estaticas', 'Backend\Classes\CadizTurismoController@statics');

// Andrés Martínez : routes empresas //todos-los-tipos/todos-los-municipios = All
    
    // Show empreas types
Route::get('/api/empresas/opciones/tipos', 'Backend\Classes\CadizTurismoController@getTiposEmpresas');
    // Show empreas municipalities
Route::get('/api/empresas/opciones/ubicacion', 'Backend\Classes\CadizTurismoController@municipalitiesList');
    
     // Find by type_slug no pagination, show all   
Route::get('/api/empresas/por/tipo/{type_slug}', 'Backend\Classes\CadizTurismoController@empresasListByType');
     // Find by type_slug with pagination   
Route::get('/api/empresas/por/tipo/{type_slug}/{page}/{number}', 'Backend\Classes\CadizTurismoController@empresasListByTypePag');

    // Find by type_slug and municipality_slug no pagination, show all   
Route::get('/api/empresas/{type_slug}/{municipality_slug}/{searchString}', 'Backend\Classes\CadizTurismoController@empresasList');
   // Find by type_slug and municipality_slug with pagination  
Route::get('/api/empresas/{type_slug}/{municipality_slug}/{searchString}/{page}/{number}', 'Backend\Classes\CadizTurismoController@empresasListPag');    
   
    // Show empresa by name_slug
Route::get('/api/empresa/{name_slug}/{lang}', 'Backend\Classes\CadizTurismoController@empresaShowByNameSlug');


// Andrés Martínez : routes Publicaciones
Route::get('/api/publicaciones/{lang}/{page}/{number}', 'Backend\Classes\CadizTurismoController@publicationListPag');

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
