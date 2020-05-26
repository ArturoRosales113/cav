<?php

// Rutas del front end
    // Index
    Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
    //Aplicaciones
    Route::get('/aplicaciones', ['uses' => 'FrontController@aplicaciones', 'as' => 'front.aplicaciones']);
    //Productos
    Route::get('/productos', ['uses' => 'FrontController@productos', 'as' => 'front.productos']);


#########################  Panel de adiministrador #########################
Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        //  Home del Dashboard
        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

        Route::get('/admin/settings', ['uses' => 'DashboardController@showSettings', 'as' => 'app.settings']);
        Route::post('/admin/settings', ['uses' => 'DashboardController@updateSettings', 'as' => 'settings.edit']);

        Route::get('/admin/navsettings', ['uses' => 'DashboardController@showNavSettings', 'as' => 'app.navsettings']);
        Route::post('/admin/navsettings', ['uses' => 'DashboardController@updateNavSettings', 'as' => 'navsettings.edit']);

        //#########################  Resources #########################
        Route::resources([
            'acabado' => 'AcabadoController',
            'article' => 'ArticleController',
            'banner' => 'BannerController',
            'cita' => 'CitaController',
            'clasification' => 'ClasificationController',
            'concept' => 'ConceptController',
            'linea' => 'LineaController',
            'marca' => 'MarcaController',
            'mensaje' => 'MensajeController',
            'nota' => 'NotaController',
            'pedido' => 'PedidoController',
            'pic' => 'PicController',
            'store' => 'StoreController',
            'testimonio' => 'TestimonioController',
            'user' => 'UserController'
        ]);
    });
});

Auth::routes();
