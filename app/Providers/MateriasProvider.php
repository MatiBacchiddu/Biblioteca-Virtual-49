<?php

namespace App\Providers;

use View;
use App\Materia;
use Illuminate\Support\ServiceProvider;

class MateriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function($view) {
            $materias = Materia::all();
            $view->with('materias', $materias);
        });
    }
}
