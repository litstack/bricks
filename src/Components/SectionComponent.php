<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class SectionComponent extends Component
{
    public $px;
    public $py;

    /**
     * Create new SectionDefaultComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string | null $title = null,
        public string $variant,
        public bool $gap,
        public bool $container,
        $px = null,
        $py = null,
    ) {
        if ($px == null) {
            $this->px = config('lit-bricks.section.px');
        } else {
            $this->px = $px;
        }

        if ($py == null) {
            $this->py = config('lit-bricks.section.py');
        } else {
            $this->py = $py;
        }
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
