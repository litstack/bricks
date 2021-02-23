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
        'lit-image-carousel'  => Components\ImageCarouselComponent::class,
        'lit-carousel-arrows' => Components\CarouselArrowsComponent::class,
        'lit-modal'           => Components\ModalComponent::class,
        'lit-modal-trigger'   => Components\ModalTriggerComponent::class,
        'lit-section'         => Components\SectionComponent::class,
        'lit-grid-item'       => Components\GridItemComponent::class,
        'lit-card'            => Components\CardComponent::class,
        'lit-accordeon'       => Components\AccordeonComponent::class,
        'lit-accordeon-item'  => Components\AccordeonItemComponent::class,
    ];

    /**
     * Macros.
     *
     * @var array
     */
    protected $macros = [
        Macros\GridItemMacro::class,
        Macros\CardMacro::class,
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

        $this->registerMacros();
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
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/lit-bricks.php' => config_path('lit-bricks.php'),
        ], 'config');
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

    /**
     * Register macros.
     *
     * @return void
     */
    protected function registerMacros()
    {
        foreach ($this->macros as $macro) {
            (new $macro)->register();
        }
    }
}
