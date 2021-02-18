<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class ModalTriggerComponent extends Component
{
    /**
     * Create a new ModalComponent instance.
     *
     * @param array $slides
     */
    public function __construct(
        public string $id,
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
        return view('bricks::components.modal-trigger');
    }
}
