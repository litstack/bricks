<?php

namespace Litstack\Bricks\Components\Dropdown;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class DropdownComponent extends Component
{
    public $id;

    public function __construct(
        public ?string $placement = null,
        public ?string $buttonClass = null,
        public ?int $offsetX = null,
        public ?int $offsetY = null,

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
        return view('bricks::components.dropdown.dropdown');
    }
}
