<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\NavigationController;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		View::share('app', [
			'description' => env('APP_DESCRIPTION'),
			'author' => env('APP_AUTHOR'),
			'name' => env('APP_NAME'),
		]);
		View::share('navigation', NavigationController::$nav);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
