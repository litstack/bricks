<?php

namespace Litstack\Bricks\Components;

use Illuminate\View\Component;

class ModalTriggerComponent extends Component
{
    /**
     * Create a new ModalTriggerComponent instance.
     *
     * @param  string $id
     * @return void
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
        return view('bricks::components.modal.modal-trigger');
    }
}
