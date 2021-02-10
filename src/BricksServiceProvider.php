<?php

namespace Litstack\Bricks;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Litstack\Bricks\Console\InstallCommand;

class BricksServiceProvider extends ServiceProvider
{
    /**
     * Blade x components.
     *
     * @var array
     */
    protected $components = [
        'lit-carousel'        => Components\CarouselComponent::class,
        'lit-carousel-arrows' => Components\CarouselArrowsComponent::class,
    ];

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            InstallCommand::class,
        ]);

        $this->registerBladeComponents();
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

    /**
     * Register blade components.
     *
     * @return void
     */
    protected function registerBladeComponents()
    {
        foreach ($this->components as $name => $class) {
            Blade::component($name, $class);
        }
    }
}
