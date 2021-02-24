<?php

namespace Litstack\Bricks\Components;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\View\Component;

class SectionComponent extends Component
{
    public $px;
    public $py;

    /**
     * Create new SectionComponent instance.
     *
     * @param  string|null                $title
     * @param  string                     $variant
     * @param  bool                       $gap
     * @param  bool                       $container
     * @param  mixed|null                 $px
     * @param  mixed|null                 $py
     * @return void
     * @throws BindingResolutionException
     */
    public function __construct(
        public string | null $title = null,
        public string | null $variant = null,
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
