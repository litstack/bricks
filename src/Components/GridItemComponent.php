<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class GridItemComponent extends Component
{
    /**
     * Create new GridItemComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public int $cols,
        public int $start
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
        return view('bricks::components.grid-item');
    }
}
