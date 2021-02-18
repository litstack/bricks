<?php

namespace Litstack\Bricks\Bricks;

use Ignite\Crud\Fields\Block\Repeatable;

abstract class SectionBrick extends Repeatable
{
    /**
     * The represantive view of the repeatable.
     *
     * @var string
     */
    protected $view = 'bricks::repeatables.section';
}
