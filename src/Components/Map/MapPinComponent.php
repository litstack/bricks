<?php

namespace Litstack\Bricks\Components\Map;

use Illuminate\View\Component;

class MapPinComponent extends Component
{
    public function __construct(
        public int $width,
        public int $height,
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
        return view('bricks::components.map.map-pin');
    }
}
