<?php

namespace Litstack\Bricks\Components\Card;

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
     * @param  null|string $route
     * @param  null|string $link
     * @param  null|string $linktext
     * @param  null|bool   $blank
     * @param  null|bool   $justify
     * @param  mixed|null  $image
     * @return void
     */
    public function __construct(
        public ?string $route = null,
        public ?string $link = null,
        public ?string $linktext = null,
        public ?bool $blank = false,
        public ?bool $justify = false,
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
