<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class SectionComponent extends Component
{
    /**
     * Create new SectionComponent instance.
     *
     * @param  bool $container
     * @param  int  $cols
     * @param  int  $gap
     * @return void
     */
    public function __construct(
        public bool | null $container = null,
        public int | null $cols = null,
        public int | null $gap = null,
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
        return view('bricks::components.section');
    }
}
