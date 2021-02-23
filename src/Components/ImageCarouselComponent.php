<?php

namespace Litstack\Bricks\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ImageCarouselComponent extends Component
{
    /**
     * Create new CarouselComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string $gallery,
        public Collection | null $images = null,
        public string | null $id = null
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
        return view('bricks::components.image-carousel');
    }
}
