<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class AccordeonComponent extends Component
{
    /**
     * Create new AccordeonComponent instance.
     *
     * @param  bool $multiple
     * @return void
     */
    public function __construct(
        public bool $multiple = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.accordeon.accordeon');
    }
}
