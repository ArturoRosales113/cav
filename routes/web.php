<?php
// Rutas del front end
// Index

use App\Http\Controllers\CategoryController;

Route::get('/', ['uses' => 'FrontController@index', 'as' => 'welcome']);
Route::get('/politica-de-privacidad', ['uses' => 'FrontController@privacidad', 'as' => 'privacidad']);

Route::post('/crear-mensaje', ['uses' => 'FrontController@createMessage', 'as' => 'front.mensaje.create']);
Route::post('/crear-cotizacion', ['uses' => 'FrontController@createCotizacion', 'as' => 'front.cotizacion.create']);
Route::post('/crear-distribuidor', ['uses' => 'FrontController@createDistribuidor', 'as' => 'front.distribuidor.create']);
Route::post('/crear-suscriptor', ['uses' => 'FrontController@createSuscriptor', 'as' => 'front.create_suscription']);
Route::get('/busqueda', ['uses' => 'PavController@busqueda', 'as' => 'front.busqueda' ]);
Route::get('/contacto', ['uses' => 'PavController@contacto', 'as' => 'front.contacto']);
Route::get('/distribuidores', ['uses' => 'PavController@distribuidores', 'as' => 'front.distribuidores']);
Route::get('/certificados', ['uses' => 'PavController@certificados', 'as' => 'front.certificados']);
Route::get('/nosotros', ['uses' => 'PavController@nosotros', 'as' => 'front.nosotros']);

Route::get('/familia/{family}', ['uses' => 'PavController@index', 'as' => 'front.index']);

Route::get('/{family}/aplicaciones', ['uses' => 'PavController@aplicaciones', 'as' => 'front.aplicaciones']);
 
Route::get('/{family}/noticias', ['uses' => 'PavController@noticias', 'as' => 'front.noticias']);

Route::get('/{family}/noticias/{slug}', ['uses' => 'PavController@noticia', 'as' => 'front.noticia']);

Route::get('/{family}/productos', ['uses' => 'PavController@productos', 'as' => 'front.productos']);

Route::get('/{family}/productos/categorias/{categoryName}', ['uses' => 'PavController@categoria', 'as' => 'front.productos.categoria']);

Route::get('/{family}/producto/{slug}', ['uses' => 'PavController@producto', 'as' => 'front.producto']);

Route::get('/{family}/proyectos', ['uses' => 'PavController@proyectos', 'as' => 'front.proyectos']);

Route::get('/{family}/recursos', ['uses' => 'PavController@recursos', 'as' => 'front.recursos']);

Route::get('/{family}/servicios', ['uses' => 'PavController@servicios', 'as' => 'front.servicios']);

#########################  Panel de adiministrador #########################
Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        //  Home del Dashboard
        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

        Route::get('/pages', ['uses' => 'DashboardController@pages', 'as' => 'app.pages']);
        Route::post('/pages', ['uses' => 'DashboardController@updatePages', 'as' => 'pages.edit']);

        Route::get('/settings', ['uses' => 'DashboardController@showSettings', 'as' => 'app.settings']);
        Route::post('/settings', ['uses' => 'DashboardController@updateSettings', 'as' => 'settings.edit']);

        Route::get('/navsettings', ['uses' => 'DashboardController@showNavSettings', 'as' => 'app.navsettings']);
        Route::post('/navsettings', ['uses' => 'DashboardController@updateNavSettings', 'as' => 'navsettings.edit']);

        //#########################  Resources #########################
        Route::resources([
            'article' => 'ArticleController',
            'aplication' => 'AplicationController',
            'banner' => 'BannerController',
            'brand' => 'BrandController',
            'category' => 'CategoryController',
            'download' => 'DownloadsController',
            'family' => 'FamilyController',
            'linea' => 'LineaController',
            'marca' => 'MarcaController',
            'mensaje' => 'MensajeController',
            'pic' => 'PicController',
            'post' => 'PostController',
            'proyect' => 'ProyectController',
            'store' => 'StoreController',
            'user' => 'UserController',
            'zone' => 'ZoneController'
        ]);

        Route::get('cotizaciones', ['uses' => 'MensajeController@cotizaciones', 'as' => 'cotizaciones.index']);

        Route::post('/aplication/{aplication}/addArticle',['uses' => 'AplicationController@addArticle', 'as' => 'aplication.article.add']);
        Route::post('/aplication/{aplication}/remove',['uses' => 'AplicationController@removeArticle', 'as' => 'aplication.article.remove']);

        Route::prefix('/delete/photo')->group(function () {
            Route::get('/family/{family}', ['uses' => 'FamilyController@photoDelete', 'as' => 'family.photo.delete']);
            Route::get('/category/{category}', ['uses' => 'CategoryController@photoDelete', 'as' => 'category.photo.delete']);
            Route::get('/picture/{pic}', ['uses' => 'picController@delete', 'as' => 'pic.delete']);
            Route::get('/aplication/{aplication}', ['uses' => 'AplicationController@delete', 'as' => 'aplication.delete']);
            Route::get('/proyect/{proyect}', ['uses' => 'ProyectController@delete', 'as' => 'proyect.delete']);
        });
        Route::prefix('/delete/icon')->group(function () {
            Route::get('/family/{family}', ['uses' => 'FamilyController@iconDelete', 'as' => 'family.icon.delete']);
            Route::get('/category/{category}', ['uses' => 'CategoryController@iconDelete', 'as' => 'category.icon.delete']);
             

Route::get('/aplication/{aplication}', ['uses' => '
            Controller@iconDelete', 'as' => 'aplication.icon.delete']);
        });
        Route::prefix('/delete/pdf')->group(function () {
            Route::get('/download/{download}', ['uses' => 'DownloadsController@delete', 'as' => 'download.delete']);
            Route::get('/aplication/{aplication}', ['uses' => 'AplicationController@pdfDelete', 'as' => 'aplication.pdf.delete']);
            Route::get('/proyect/{proyect}', ['uses' => 'ProyectController@pdfDelete', 'as' => 'proyect.pdf.delete']);
        });
        Route::prefix('/delete/banner')->group(function () {
                 Route::get('/proyect/{proyect}', ['uses' => 'ProyectController@bannerDelete', 'as' => 'proyect.banner.delete']);
        });
    });

});

Auth::routes();
