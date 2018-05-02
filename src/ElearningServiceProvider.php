<?php

namespace GFL\Elearning;

use Illuminate\Support\ServiceProvider;
use GFL\Elearning\middlewares\VerifyJWTToken as JWTAuth;

class ElearningServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

        $this->loadViewsFrom(__DIR__.'/views', 'Elearning');
        $this->publishes([
            __DIR__.'/assets' => public_path('/'),
        ], 'public');

        $this->app['router']->aliasMiddleware('jwt.auth' , JWTAuth::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('GFL\Elearning\controllers\edocuments\EdocumentController');
        $this->app->make('GFL\Elearning\controllers\auths\LoginController');
    }
}
