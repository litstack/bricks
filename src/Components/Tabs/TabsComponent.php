<?php

namespace Litstack\Bricks\Components\Tabs;

use Illuminate\View\Component;

class TabsComponent extends Component
{
    /**
     * Create new AccordeonComponent instance.
     *
     * @param  bool $multiple
     * @return void
     */
    public function __construct(
       public ?string $contentClasses = null,
       public ?string $tabClasses = null,
       public ?string $activeClasses = null
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('bricks::components.tabs.tabs');
    }
}
