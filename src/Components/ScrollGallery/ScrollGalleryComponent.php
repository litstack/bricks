<?php

namespace Litstack\Bricks\Components\ScrollGallery;

use Illuminate\View\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

class ScrollGalleryComponent extends Component
{
    /**
     * Create a new ScrollGalleryComponent.
     *
     * @param  string               $id
     * @param  null|MediaCollection $images
     * @return void
     */
    public function __construct(
        public string $id,
        public ?MediaCollection $images = null,
        public ?array $collections = null
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
        return view('bricks::components.scroll-gallery.scroll-gallery');
    }
}
