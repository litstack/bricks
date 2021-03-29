<?php

namespace Litstack\Bricks\Components\Map;

use Illuminate\View\Component;

class MapClusterComponent extends Component
{
    public function __construct(
        public int $width,
        public int $height,
        public ?int $fontSize,
        public ?string $fontColor,
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
        return view('bricks::components.map.map-cluster');
    }
}
