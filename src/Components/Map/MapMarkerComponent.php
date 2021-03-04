<?php

namespace Litstack\Bricks\Components\Map;

use Illuminate\View\Component;

class MapMarkerComponent extends Component
{
    public function __construct(
        public float $lat,
        public float $lng,
        public ?array $categories = null,
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
        return view('bricks::components.map.map-marker');
    }
}
