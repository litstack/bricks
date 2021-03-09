<?php

namespace Litstack\Bricks\Components\Dropdown;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class DropdownComponent extends Component
{
    public $id;

    public function __construct(
        public ?string $trigger = null,
        public ?string $group = null,
        public ?string $placement = null,
        public ?string $buttonClass = null,
        public ?int $offsetX = null,
        public ?int $offsetY = null,
        public ?bool $noArrow = null,

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
