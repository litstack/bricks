<?php

namespace Litstack\Bricks\Components\Dropdown;

use Illuminate\View\Component;

class DropdownItemComponent extends Component
{
    public $tag;

    public function __construct(
        public ?string $href = null
    ) {
        $this->tag = $href ? 'a' : 'div';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.dropdown.dropdown-item');
    }
}
