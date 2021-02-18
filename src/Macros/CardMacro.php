<?php

namespace Litstack\Bricks\Macros;

use Ignite\Crud\BaseForm;

class CardMacro
{
    public function register()
    {
        BaseForm::macro('cardMacro', function () {
            $this->input('topline')->title('Topline');
            $this->input('headline')->title('Überschrift');
            $this->input('subline')->title('Subline');

            $this->textarea('body')->title('Inhalt');

            $this->select('has_link')->title('Link')->options([
                null    => 'Kein Link',
                'route' => 'Route',
                'link'  => 'Link',
            ]);
            $this->input('link')
            ->title('Link')
            ->when('has_link', 'link');
            $this->route('route')
                ->collection('app')
                ->title('Picke a Url')
                ->when('has_link', 'route');
            $this->input('linktext')
                ->title('Linktext')
                ->when('has_link', 'link')
                ->orWhen('has_link', 'route');
            $this->boolean('blank')
                ->title('In neuem Fenster öffnen')
                ->when('has_link', 'link')
                ->orWhen('has_link', 'route');

            $this->image('image')->title('Bild')->maxFiles(1)->expand();
        });
    }
}
