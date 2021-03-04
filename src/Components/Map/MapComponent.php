<?php

namespace Litstack\Bricks\Components\Map;

use Illuminate\View\Component;

class MapComponent extends Component
{
    public function __construct(
        public string $apiKey,
        public ?float $lat = null,
        public ?float $lng = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.map.map');
    }
}
