<?php

namespace Litstack\Bricks\Components\Nav;

use Illuminate\View\Component;

class NavComponent extends Component
{
    public function __construct(
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
        return view('bricks::components.nav.nav');
    }
}
