<?php

namespace Litstack\Bricks;

use Illuminate\Support\ServiceProvider;

class BricksServiceProvider extends ServiceProvider
{
    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bricks');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bricks'),
        ]);
    }
}
