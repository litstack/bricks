<?php

namespace Litstack\Bricks\Components\Nav;

use Ignite\Crud\Models\ListItem;
use Illuminate\View\Component;

class NavItemComponent extends Component
{
    public $title;

    public function __construct(
        public ListItem $item,
        public string $level,
        public string $dropdownClass,
        public string $active,
        public string $placement,
        public ?array $offset = null,
        public ?bool $root = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.nav.item');
    }
}
