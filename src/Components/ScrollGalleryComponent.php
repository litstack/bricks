<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class AccordeonComponent extends Component
{

    /**
     *
     */
    public function __construct(
        public string $id,
        public Collection | null $images = null
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.scroll-gallery');
    }
}
