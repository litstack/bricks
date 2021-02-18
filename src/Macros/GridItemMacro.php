<?php

namespace Litstack\Bricks\Macros;

use Ignite\Crud\BaseForm;

class GridItemMacro
{
    public function register()
    {
        BaseForm::macro('gridItemMacro', function () {
            $this->range('col_span')
                ->title('Spalten')
                ->min(0)
                ->max(12)
                ->step(1)
                ->width(1 / 2);
            $this->range('col_start')
                ->title('Start Spalte')
                ->min(1)
                ->max(12)
                ->step(1)
                ->width(1 / 2);
        });
    }
}
