<?php
// Rutas del front end
// Index
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
//Aplicaciones
Route::get('/aplicaciones', ['uses' => 'FrontController@aplicaciones', 'as' => 'front.aplicaciones']);
//Productos
Route::get('/productos', ['uses' => 'FrontController@productos', 'as' => 'front.productos']);

Route::get('/productos/categorias/', ['uses' => 'FrontController@categorias', 'as' => 'front.categorias']);

Route::get('/productos/categorias/{$categoryName}', ['uses' => 'FrontController@categoria', 'as' => 'front.productos.categoria']);

Route::get('/productos/categorias/{$categoryName}/{$productName}', ['uses' => 'FrontController@producto', 'as' => 'front.productos.categopria.producto']);

Route::get('/productos/{$productName}', ['uses' => 'FrontController@producto', 'as' => 'front.productos.producto']);

Route::get('/aplicaciones', ['uses' => 'FrontController@aplicaciones', 'as' => 'front.aplicaciones']);

Route::get('/servicios', ['uses' => 'FrontController@servicios', 'as' => 'front.servicios']);

Route::get('/proyectos', ['uses' => 'FrontController@proyectos', 'as' => 'front.proyectos']);

Route::get('/distribuidores', ['uses' => 'FrontController@distribuidores', 'as' => 'front.distribuidores']);

Route::get('/contacto', ['uses' => 'FrontController@contacto', 'as' => 'front.contacto']);

Route::get('/certificados', ['uses' => 'FrontController@certificados', 'as' => 'front.certificados']);

#########################  Panel de adiministrador #########################
Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        //  Home del Dashboard
        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

        Route::get('/admin/pages', ['uses' => 'DashboardController@pages', 'as' => 'app.pages']);
        Route::post('/admin/pages', ['uses' => 'DashboardController@updatePages', 'as' => 'pages.edit']);

        Route::get('/admin/settings', ['uses' => 'DashboardController@showSettings', 'as' => 'app.settings']);
        Route::post('/admin/settings', ['uses' => 'DashboardController@updateSettings', 'as' => 'settings.edit']);

        Route::get('/admin/navsettings', ['uses' => 'DashboardController@showNavSettings', 'as' => 'app.navsettings']);
        Route::post('/admin/navsettings', ['uses' => 'DashboardController@updateNavSettings', 'as' => 'navsettings.edit']);

        //#########################  Resources #########################
        Route::resources([
            'article' => 'ArticleController',
            'banner' => 'BannerController',
            'clasification' => 'ClasificationController',
            'concept' => 'ConceptController',
            'downlad' => 'DownloadsController',
            'linea' => 'LineaController',
            'marca' => 'MarcaController',
            'mensaje' => 'MensajeController',
            'pic' => 'PicController',
            'store' => 'StoreController',
            'user' => 'UserController'
        ]);
    });
});

Auth::routes();
