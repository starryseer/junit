<?php


namespace Jinseer\Junit\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Contracts\Routing\UrlGenerator;

class JunitProvider extends ServiceProvider
{
    protected $namespace = 'Jinseer\Junit\Http\Controllers';

    public function boot()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__.'/../routes/web.php');

        app('view')->addNamespace('junit',[__DIR__.'/../Resources']);
    }
}