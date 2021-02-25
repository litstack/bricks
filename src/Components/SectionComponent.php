<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class SectionComponent extends Component
{
    /**
     * Create new SectionComponent instance.
     *
     * @param  bool $gap
     * @param  bool $container
     * @return void
     */
    public function __construct(
        public bool | null $gap = null,
        public bool | null $container = null,
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
