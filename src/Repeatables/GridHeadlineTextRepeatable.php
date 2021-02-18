<?php

namespace Litstack\Bricks\Repeatables;

use Ignite\Crud\Fields\Block\Repeatable;
use Ignite\Crud\Fields\Block\RepeatableForm;
use Ignite\Page\Table\ColumnBuilder;

class GridHeadlineTextRepeatable extends Repeatable
{
    /**
     * Repeatable type.
     *
     * @var string
     */
    protected $type = 'headline_text';

    /**
     * The represantive view of the repeatable.
     *
     * @var string
     */
    protected $view = 'bricks::repeatables.grid-headline-text';

    /**
     * Build the repeatable preview.
     *
     * @param  ColumnBuilder $preview
     * @return void
     */
    public function preview(ColumnBuilder $preview): void
    {
        $preview->col('{headline}');
    }

    /**
     * Build the repeatable form.
     *
     * @param  RepeatableForm $form
     * @return void
     */
    public function form(RepeatableForm $form): void
    {
        $form->gridItemMacro();
        $form->input('headline')->title('Überschrift');
        $form->wysiwyg('text')->title('Text');
    }
}
