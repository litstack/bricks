<?php

namespace Litstack\Bricks\Repeatables;

use Ignite\Crud\Fields\Block\Repeatable;
use Ignite\Crud\Fields\Block\RepeatableForm;
use Ignite\Page\Table\ColumnBuilder;

class ImageSlideRepeatable extends Repeatable
{
    /**
     * Repeatable type.
     *
     * @var string
     */
    protected $type = 'image_slide';

    /**
     * The represantive view of the repeatable.
     *
     * @var string
     */
    protected $view = 'bricks::image-slide';

    /**
     * Build the repeatable preview.
     *
     * @param  ColumnBuilder $preview
     * @return void
     */
    public function preview(ColumnBuilder $preview): void
    {
        $preview->col(fa('image').' Slide');
    }

    /**
     * Build the repeatable form.
     *
     * @param  RepeatableForm $form
     * @return void
     */
    public function form(RepeatableForm $form): void
    {
        $form->image('image')->title('Bild')->maxFiles(1);

        $form->input('headline')->title('Überschrift');
        $form->textarea('text')->title('Text');
    }
}
