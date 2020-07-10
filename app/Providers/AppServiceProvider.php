<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Family;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('backend.article.edit', function ($view) {
            $view->with('families' , Family::all());
          });
        view()->composer('backend.article.edit', function ($view) {
            $view->with('categories' , Category::all());
          });

        view()->composer('frontend.layouts.app', function ($view) {
          $view->with('mainFamily' , Family::find(2));
        });
        view()->composer('frontend.layoutsR.app', function ($view) {
          $view->with('mainFamily' , Family::find(1));
        });

        view()->composer('frontend.industrial.productos', function ($view) {
            $view->with('categories' ,  Family::find(2)->categories);
          });
        view()->composer('frontend.residencial.productos', function ($view) {
            $view->with('categories' , Family::find(1)->categories);
          });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
