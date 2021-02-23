<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class CarouselArrowsComponent extends Component
{
    /**
     * Create new CarouselArrowsComponent instance.
     *
     * @param  string $id
     * @param  string $color
     * @return void
     */
    public function __construct(
        public string $id,
        public string $color = 'black'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.carousel.carousel-arrows');
    }
}
