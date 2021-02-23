<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class AccordeonItemComponent extends Component
{
    /**
     * Create new CarouselComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string $header
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.accordeon-item');
    }
}
