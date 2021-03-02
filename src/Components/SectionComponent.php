<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class SectionComponent extends Component
{
    /**
     * Create new SectionComponent instance.
     *
     * @param  bool   $container
     * @param  int    $cols
     * @param  int    $gap
     * @param  string $tag
     * @return void
     */
    public function __construct(
        public ?bool $container = null,
        public ?int $cols = null,
        public ?int $gap = null,
        public ?string $tag = null,
    ) {
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
