<?php
// Rutas del front end
// Index

use App\Http\Controllers\CategoryController;

Route::get('/', ['uses' => 'FrontController@index', 'as' => 'welcome']);


Route::prefix('industrial')->group(function(){
    //Aplicaciones
    Route::get('/', ['uses' => 'IndustrialController@index', 'as' => 'front.industrial.index']);

    Route::get('/aplicaciones', ['uses' => 'IndustrialController@aplicaciones', 'as' => 'front.industrial.aplicaciones']);
    
    Route::get('/certificados', ['uses' => 'IndustrialController@certificados', 'as' => 'front.industrial.certificados']);

    Route::get('/contacto', ['uses' => 'IndustrialController@contacto', 'as' => 'front.industrial.contacto']);

    Route::get('/distribuidores', ['uses' => 'IndustrialController@distribuidores', 'as' => 'front.industrial.distribuidores']);

    Route::get('/noticias', ['uses' => 'IndustrialController@noticias', 'as' => 'front.industrial.noticias']);

    Route::get('/productos', ['uses' => 'IndustrialController@productos', 'as' => 'front.industrial.productos']);

    Route::get('/productos/categorias/{categoryName}', ['uses' => 'IndustrialController@categoria', 'as' => 'front.industrial.productos.categoria']);

    Route::get('/productos/{slug}', ['uses' => 'IndustrialController@producto', 'as' => 'front.industrial.productos.producto']);

    Route::get('/proyectos', ['uses' => 'IndustrialController@proyectos', 'as' => 'front.industrial.proyectos']);

    Route::get('/recursos', ['uses' => 'IndustrialController@recursos', 'as' => 'front.industrial.recursos']);

    Route::get('/servicios', ['uses' => 'IndustrialController@servicios', 'as' => 'front.industrial.servicios']);

});

Route::prefix('residencial')->group(function(){

    Route::get('/', ['uses' => 'ResidecialController@index', 'as' => 'front.residencial.index']);
    //Aplicaciones
    Route::get('/aplicaciones', ['uses' => 'ResidecialController@aplicaciones', 'as' => 'front.residencial.aplicaciones']);

    Route::get('/certificados', ['uses' => 'ResidecialController@certificados', 'as' => 'front.residencial.certificados']);
    
    Route::get('/contacto', ['uses' => 'ResidecialController@contacto', 'as' => 'front.residencial.contacto']);

    Route::get('/distribuidores', ['uses' => 'ResidecialController@distribuidores', 'as' => 'front.residencial.distribuidores']);

    Route::get('/noticias', ['uses' => 'ResidecialController@noticias', 'as' => 'front.residencial.noticias']);

    Route::get('/productos', ['uses' => 'ResidecialController@productos', 'as' => 'front.residencial.productos']);

    Route::get('/productos/categorias/{$categoryName}', ['uses' => 'ResidecialController@categoria', 'as' => 'front.residencial.productos.categoria']);

    Route::get('/productos/{$productName}', ['uses' => 'ResidecialController@producto', 'as' => 'front.residencial.productos.producto']);

    Route::get('/proyectos', ['uses' => 'ResidecialController@proyectos', 'as' => 'front.residencial.proyectos']);

    Route::get('/recursos', ['uses' => 'ResidecialController@recursos', 'as' => 'front.residencial.recursos']);

    Route::get('/servicios', ['uses' => 'ResidecialController@servicios', 'as' => 'front.residencial.servicios']);

});

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
            'user' => 'UserController'
        ]);

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
