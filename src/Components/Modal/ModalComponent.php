<?php

namespace Litstack\Bricks\Components\Modal;

use Illuminate\View\Component;

class ModalComponent extends Component
{
    /**
     * Create a new ModalComponent instance.
     *
     * @param  string      $id
     * @param  string|null $title
     * @param  bool        $hideFooter
     * @return void
     */
    public function __construct(
        public string $id,
        public string | null $title = null,
        public bool $hideFooter = false,
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
        return view('bricks::components.modal.modal');
    }
}