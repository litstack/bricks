<?php

namespace Litstack\Bricks\Components;

use Ignite\Crud\Models\Media;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create new CardComponent instance.
     *
     * @param  string|null $topline
     * @param  string|null $headline
     * @param  string|null $subline
     * @param  string|null $route
     * @param  string|null $link
     * @param  string|null $linktext
     * @param  bool|null   $blank
     * @param  Media|null  $image
     * @return void
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
