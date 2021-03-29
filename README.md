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

## List of Bricks

| Name                        | Fields                 |  Usage                                                                 |
| --------------------------- | ---------------------- | ---------------------------------------------------------------------- |
| TextRepeatable::class       | WYSIWYG                | Simple Text-Repeatable                                                 |
| ImageRepeatable::class      | image                  | Single Image-Repeatable using `<x-lit-image />` Component              |
| ImagesRepeatable::class     | image                  | Multiple Image-Repeatable using `<x-lit-image />` Component            |
| ImageSlideRepeatable::class | image, input, textarea | Image-Repeatable using `<x-lit-image />` Component, Input and Textarea |

## Frontend Components

### Carousel

The width of each slide is controlled via the min-width property.

```html
<x-lit-carousel id="slider-1" class="container">
    <div class="min-w-full">
        Foo
    </div>
    <div class="min-w-full">
        Bar
    </div>
</x-lit-carousel>

<x-lit-carousel-arrows id="slider-1" color="black" />
```

### Tooltips

```html
<x-lit-tooltip tooltip="I'am a tooltip" placement="top-start">
    <div>Hallo</div>
</x-lit-tooltip>

<x-lit-tooltip
    tooltip="I'am a tooltip with custom styles that requires a click to toggle"
    placement="bottom-start"
    tooltipClass="px-6 py-4 bg-white shadow-lg lit-tooltip text-blue-400"
    click
>
    <div>Click</div>
</x-lit-tooltip>

<x-lit-tooltip
    tooltip="I'am a tooltip that is open by default"
    placement="top-end"
    open
    tooltipClass="px-6 py-4 bg-white shadow-lg lit-tooltip text-blue-400"
>
    <div>Hallo</div>
</x-lit-tooltip>

<x-lit-tooltip placement="bottom-start" class="mt-4 ml-4">
    <x-slot name="tooltip">
        <div class="text-red-500">
            This is a styled tooltip from a slot!
        </div>
    </x-slot>
    <div>Hallo</div>
</x-lit-tooltip>
```

| Attribute    | Type   | Description                                          | required | see                     |
| ------------ | ------ | ---------------------------------------------------- | -------- | ----------------------- |
| tooltip      | String | Message to be shown as tooltip                       |          |                         |
| placement    | String | top, bottom, left, right (-start, -end)              |          | https://popper.js.org/  |
| open         | Bool   | indicates if the tooltip should be initially shown   |          |                         |
| click        | Bool   | indicates if the tooltip should be toggled via click |          |                         |
| tooltipClass | String | classes to style the tootltip                        |          |                         |
| offsetX      | Number | Offet X in px                                        |          |                         |
| offsetY      | Number | Offet Y in px                                        |          |                         |

## Modal

```html
<x-lit-modal-trigger id="modal-1">
    Modal
</x-lit-modal-trigger>

<x-lit-modal id="modal-1" class="max-w-xl">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa rem
    excepturi molestias, libero tempora officiis numquam non ipsa. Omnis
    voluptate reprehenderit, quisquam ad voluptatem quaerat. Quos perspiciatis
    odio blanditiis.
</x-lit-modal>
```

### Attributes

Modal

| Attribute  | Type            | Description                          | required |
| ---------- | --------------- | ------------------------------------ | -------- |
| id         | String / Number | Identifier linking modal and trigger | ✅       |
| title      | String          | Modal Titel                          |          |
| hideFooter | Boolean         |                                      |          |

Trigger

| Attribute | Type            | Description                          | required |
| --------- | --------------- | ------------------------------------ | -------- |
| id        | String / Number | Identifier linking modal and trigger | ✅       |

## Map

Map with a simple Marker, will be panned to the marker automatically

```html
<x-lit-map apiKey="ABC-Google-API-Key" class="mt-32 h-96" zoom="12">
    <x-lit-map-marker lat="54.325" lng="10.122" />
</x-lit-map>
```

Marker with an info window

```html
<x-lit-map-marker lat="54.325" lng="10.122">
    <div class="p-8">
        Hello World!
    </div>
</x-lit-map-marker>
```

Marker with a custom Pin-Icon. Notice that you set all styles of an inline SVG to fill with rgb as HEX will not work for some reason.

```html
<x-lit-map-marker lat="54.32334600482515" lng="10.12654862484407">
    <x-slot name="pin">
        <x-lit-map-pin width="31" height="38">
            <svg
                viewBox="0 0 121 146"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                stroke-linejoin="round"
                stroke-miterlimit="2"
            >
                <path
                    d="M103.14 103.121l-42.722 42.712-42.72-42.712c-23.597-23.59-23.597-61.836 0-85.427 23.592-23.592 61.848-23.592 85.442 0 23.592 23.591 23.592 61.837 0 85.427"
                    style="fill:rgb(237,117,33);"
                />
                <path
                    d="M103.133 17.694C91.334 5.896 75.873 0 60.411 0v145.833l42.722-42.712c23.592-23.59 23.592-61.839 0-85.427"
                    style="fill:rgb(221,114,38);"
                />
                <path
                    d="M84.456 59.914c0 12.211-9.903 22.114-22.119 22.114s-22.119-9.903-22.119-22.114c0-12.213 9.903-22.116 22.119-22.116s22.119 9.903 22.119 22.116"
                    style="fill:rgb(255,255,255);"
                />
            </svg>
        </x-lit-map-pin>
    </x-slot>
    <div class="flex bg-white shadow-xl">
        <div class="p-8">
            Hello World!
        </div>
    </div>
</x-lit-map-marker>
```

Filter markers on map

```html
<input type="checkbox" value="1" class="lit-map-filter" />Category 1
<input type="checkbox" value="2" class="lit-map-filter" />Category 2
<input type="checkbox" value="3" class="lit-map-filter" />Category 3

<x-lit-map apiKey="ABC-Google-API-Key" class="mt-32 h-96" zoom="12">
    <x-lit-map-marker lat="54.323" lng="10.126" :categories="[1,2]" />
    <x-lit-map-marker lat="54.325" lng="10.122" :categories="[1]" />
</x-lit-map>
```

Styled map

```html
<x-lit-map apiKey="ABC-Google-API-Key" class="mt-32 h-96" zoom="12">
    <x-slot name="styles">
        <!-- Your styles here, e.g. from snazzymaps.com -->
        [ { "featureType": "all", "elementType": "geometry.fill", "stylers": [ {
        "weight": "2.00" } ] } ]
    </x-slot>
</x-lit-map>
```

### Attributes

Map
| Attribute | Type | Description | required |
| --------- | ------ | ------------------------- | -------- |
| apiKey | String | Google API-Key | ✅ |
| zoom | Number | Zoom Level (0-21) |   |
| lat, lng | Float | Coordinates to center map |   |

Marker

| Attribute | Type  | Description | required |
| --------- | ----- | ----------- | -------- |
| lat       | Float | Latitude    | ✅       |
| lng       | Float | Longitude   | ✅       |

Pin

| Attribute | Type   | Description             | required |
| --------- | ------ | ----------------------- | -------- |
| width     | Number | Width of the pin in px  | ✅       |
| height    | Number | Height of the pin in px | ✅       |

## Navigation

```html
<ul class="bg-blue-500">
    @foreach ($nav->main as $item)
    <x-lit-nav-item
        :item="$item"
        level="1"
        root
        class="py-4 bg-yellow-300"
        outerClass="ml-4 bg-red-300 pr-8"
        dropdownClass="bg-blue-400 shadow"
        placement="bottom-start"
        :offset="[0,10]"
        active="font-bold text-green-500"
        noArrow
    >
        <x-slot name="title">
            {{ $item->title }}
        </x-slot>
        @foreach ($item->children as $item)
        <x-lit-nav-item
            :item="$item"
            level="2"
            placement="right"
            class="px-3"
            dropdownClass="bg-white shadow-2xl"
            :offset="[0,10]"
            active="font-bold text-red-500 active-level-2"
        >
            <x-slot name="title">
                <div class="py-3 mr-2 -ml-2">
                    *
                </div>
                {{ $item->title }}
            </x-slot>
            @foreach ($item->children as $item)
            <x-lit-nav-item
                :item="$item"
                level="3"
                placement="right"
                dropdownClass="bg-white shadow-2xl"
                active="font-bold"
            />
            @endforeach
        </x-lit-nav-item>
        @endforeach
    </x-lit-nav-item>
    @endforeach
</ul>
```
