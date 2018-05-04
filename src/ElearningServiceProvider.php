<?php

namespace GFL\Elearning;

use Illuminate\Support\ServiceProvider;
use GFL\Elearning\middlewares\VerifyJWTToken as JWTAuth;

class ElearningServiceProvider extends ServiceProvider
{
    protected $commands = [
         'GFL\Elearning\commands\CreateController',
         'GFL\Elearning\commands\CreateMigration',
         'GFL\Elearning\commands\CreateModel',
    //     'GFL\Elearning\commands\CreateRequest',
    ];

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

        //command

        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->make('GFL\Elearning\controllers\edocuments\EDocumentController');
        //$this->app->make('GFL\Elearning\controllers\auths\LoginController');
        //$this->app->make('GFL\Elearning\controllers\emodules\EModuleController');
    }
}
