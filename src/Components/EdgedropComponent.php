<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class EdgedropComponent extends Component
{
    public function __construct(
        public int $offset,
        public ?bool $end = null,
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
        return view('bricks::components.edgedrop');
    }
}
