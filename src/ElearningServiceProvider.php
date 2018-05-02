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

        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

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
