<?php

namespace Litstack\Bricks\Components\Map;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class MapComponent extends Component
{
    public $id;

    public function __construct(
        public string $apiKey,
        public ?float $lat = null,
        public ?float $lng = null,
        public ?int $zoom = null,
        public ?string $script = null,
    ) {
        $this->id = Str::random(32);
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
