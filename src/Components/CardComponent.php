<?php

namespace Litstack\Bricks\Components;

use Ignite\Crud\Models\Media;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create new SectionDefaultComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string | null $topline = null,
        public string | null $headline = null,
        public string | null $subline = null,
        public string | null $route = null,
        public string | null $link = null,
        public string | null $linktext = null,
        public bool | null $blank = false,
        public Media | null $image = null,
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
        return view('bricks::components.card');
    }
}
