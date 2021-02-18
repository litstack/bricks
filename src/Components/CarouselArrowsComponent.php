<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class CarouselArrowsComponent extends Component
{
    /**
     * Identifier.
     *
     * @var string
     */
    public $id;

    /**
     * Color.
     *
     * @var string
     */
    public $color;

    /**
     * Create new CarouselComponent instance.
     *
     * @param array $slides
     */
    public function __construct(string $id, string $color = 'black')
    {
        $this->id = $id;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.carousel-arrows');
    }
}
