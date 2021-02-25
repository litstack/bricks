<?php

namespace Litstack\Bricks\Components\ScrollGallery;

use Illuminate\View\Component;

class ScrollGalleryTriggerComponent extends Component
{
    public function __construct(
        public bool | null $desktopOnly = null,
        public string $id,
        public string | null $imageId = null,
    ) {
        if (! $desktopOnly) {
            $desktopOnly = false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.scroll-gallery.scroll-gallery-trigger');
    }
}
