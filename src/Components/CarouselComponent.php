<?php

namespace Litstack\Bricks\Components;

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
        public string | null $id = null,
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
