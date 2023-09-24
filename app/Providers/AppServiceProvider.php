<?php

namespace App\Providers;

use View;
use App\Models\Category;
use Cart;

use Illuminate\Pagination\Paginator;

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
        // View::share('name', 'Abu');

        View::composer('*', function($view) {
            $view->with('categories', Category::where('status', 1)->get());
        });

        View::composer('*', function($view) {
            $view->with('cartItems', Cart::content());
        });

        Paginator::useBootstrapFive();
        
    }
}
