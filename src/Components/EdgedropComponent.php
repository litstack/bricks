<?php

namespace Litstack\Bricks\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class EdgedropComponent extends Component
{
    public $id;

    public function __construct(
        public int | bool $start = false,
        public int | bool $end = false,
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
        return view('bricks::components.edgedrop');
    }
}
