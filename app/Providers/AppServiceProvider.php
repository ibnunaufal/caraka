<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use View;
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
        //
        View::composer('*', function($view)
        {
            $categorynavbar = Category::get();
            // $categorynavbar = "";
            $view->with('categorynavbar', $categorynavbar);
        });
    }
}
