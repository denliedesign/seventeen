<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Promo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('articles', Article::all());
//        View::share('promos', Promo::all());
    }
}
