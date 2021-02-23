<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class AccordeonComponent extends Component
{
    /**
     * Create new CarouselComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public bool $multiple = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.accordeon');
    }
}
