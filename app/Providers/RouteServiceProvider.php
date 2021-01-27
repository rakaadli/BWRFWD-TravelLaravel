<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
<<<<<<< HEAD
=======
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';

    /**
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
<<<<<<< HEAD
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
=======
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
<<<<<<< HEAD
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
=======
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }
}
