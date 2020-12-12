<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Carbon;

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
        Schema::defaultStringLength(191);

        view()->composer('backend.article.edit', function ($view) {
            $view->with('families' , Family::all());
        });

        view()->composer('backend.article.edit', function ($view) {
            $view->with('categories' , Category::all());
        });

        view()->composer('frontend.layouts.app', function ($view) {
          $view->with('families' , Family::all());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      Carbon::setLocale(LC_TIME, config('app.locale'));
    }
}
