<?php

namespace Litstack\Bricks\Components\Accordeon;

use Illuminate\View\Component;

class AccordeonItemComponent extends Component
{
    /**
     * Create new AccordeonItemComponent instance.
     *
     * @param  string $header
     * @return void
     */
    public function __construct(
        public string $header
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.accordeon.accordeon-item');
    }
}
