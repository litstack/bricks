<?php

namespace Litstack\Bricks\Components\Tabs;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class TabComponent extends Component
{
    public $id;

    /**
     * Create new AccordeonComponent instance.
     *
     * @param  bool $multiple
     * @return void
     */
    public function __construct(
       public string | int $label,
       public ?bool $active = null,
    ) {
        $this->id = Str::random(32);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.tabs.tab');
    }
}
