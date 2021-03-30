<?php

namespace Litstack\Bricks\Components\Carousel;

use Illuminate\View\Component;

class CarouselDotsComponent extends Component
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
        public ?string $wrapperClass = null,
        public ?string $activeClass = null,
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
        return view('bricks::components.carousel.carousel-dots');
    }
}
