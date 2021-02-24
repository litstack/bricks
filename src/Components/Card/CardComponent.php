<?php

namespace Litstack\Bricks\Components\Card;

use Ignite\Crud\Models\Media;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**+
     *
     */
    public $href;

    /**
     * Create new CardComponent instance.
     *
     * @param  string|null $route
     * @param  string|null $link
     * @param  string|null $linktext
     * @param  bool|null   $blank
     * @param  Media|null  $image
     * @return void
     */
    public function __construct(
        public string | null $route = null,
        public string | null $link = null,
        public string | null $linktext = null,
        public bool | null $blank = false,
        public $image = null,
    ) {
        $this->href = isset($route) ? $route : (isset($link) ? $link : null);
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
