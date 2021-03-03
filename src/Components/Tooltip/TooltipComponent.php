<?php

namespace Litstack\Bricks\Components\Tooltip;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class TooltipComponent extends Component
{
    public $id;

    /**
     * Create new CardComponent instance.
     *
     * @param  null|string $route
     * @return void
     */
    public function __construct(
        public ?string $tooltip = null,
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
        return view('bricks::components.tooltip');
    }
}
