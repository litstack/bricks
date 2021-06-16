<?php

namespace Litstack\Bricks\Components\Carousel;

use Illuminate\View\Component;

class CarouselComponent extends Component
{
    /**
     * Create new CarouselComponent instance.
     *
     * @param  string|null $id
     * @return void
     */
    public function __construct(
        public ?string $id = null,
        public ?string $for = null,
        public ?string $activeClass = null,
        public ?string $align = null,
        public ?int $autoplay = null,
        public ?bool $loop = null,
        public ?int $speed = null,
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
        return view('bricks::components.carousel.carousel');
    }
}
