<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AccordeonComponent extends Component
{

    /**
     *
     */
    public function __construct(
        public bool $desktopOnly = false,
        public string $id,
        public string | null $imageId,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.scroll-gallery-trigger');
    }
}
