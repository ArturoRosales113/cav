<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
