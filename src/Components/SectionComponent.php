<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class SectionComponent extends Component
{
    /**
     * Create new SectionDefaultComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string $variant,
        public bool $gap = true,
        public bool $container = true
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
        return view('bricks::components.section');
    }
}
