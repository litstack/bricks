# Litstack Bricks 🧱

Pre-built Repeatables and Templates for common Webcontents.

## Install

`composer require litstack/bricks`

`php artisan lit-bricks:install`

## Usage

Add the desired Repeatables to your blocks:

```php
use Litstack\Bricks\Repeatables\TextRepeatable;

$page->card(function ($form) {
    $form->block('content')
        ->title('My Content')
        ->repeatables(function ($repeatables) {
            $repeatables->add(TextRepeatable::class);
        });
});
```

Return a view, pass it the formdata:

```php
return view('welcome')->with([
    'form' => Form::load('pages', 'home')
]);
```

Add the block to your template:

```php
@block($form->content)
```

## Customize Templates

You can publish the templates to `resources/views/vendor/bricks/` and edit them to your needs:

```shell
php artisan vendor:publish --provider="Litstack\Bricks\BricksServiceProvider --tag=views"
```

## Components

-   [Carousel](docs/Carousel.md)
-   [Edgedrop](docs/Edgedrop.md)
-   [Map](docs/Map.md)
-   [Modal](docs/Modal.md)
-   [Navigation](docs/Navigation.md)
-   [Tooltip](docs/Tooltip.md)

## Repeatables

| Name                        | Fields                 |  Usage                                                                 |
| --------------------------- | ---------------------- | ---------------------------------------------------------------------- |
| TextRepeatable::class       | WYSIWYG                | Simple Text-Repeatable                                                 |
| ImageRepeatable::class      | image                  | Single Image-Repeatable using `<x-lit-image />` Component              |
| ImagesRepeatable::class     | image                  | Multiple Image-Repeatable using `<x-lit-image />` Component            |
| ImageSlideRepeatable::class | image, input, textarea | Image-Repeatable using `<x-lit-image />` Component, Input and Textarea |
