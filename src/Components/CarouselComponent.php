<?php

namespace Litstack\Bricks\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CarouselComponent extends Component
{
    /**
     * Slides to be shown in the carousel.
     *
     * @var array
     */
    public $block;

    /**
     * Identifier.
     *
     * @var string
     */
    public $id;

    /**
     * Create new CarouselComponent instance.
     *
     * @param array $slides
     */
    public function __construct(Collection $block = null, string $id = null)
    {
        $this->block = $block;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.carousel');
    }
}
