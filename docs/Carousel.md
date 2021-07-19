# Carousel

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

Advanced example with dots and synced carousel acting as 'tabs'

```html
<x-lit-carousel
    id="slider-1"
    class="container"
    activeClass="bg-blue-200"
    loop
    align="start"
>
    <div class="min-w-full">
        Foo
    </div>
    <div class="min-w-full">
        Bar
    </div>
</x-lit-carousel>

<x-lit-carousel for="slider-1" class="container" align="center">
    <div style="min-width: 50%" class="bg-green-100">
        Tab 1
    </div>
    <div style="min-width: 50%" class="bg-green-200">
        Tab 2
    </div>
</x-lit-carousel>

<x-lit-carousel-dots
    id="slider-1"
    class="w-4 h-2 m-2 transition-all duration-300 bg-gray-500 rounded-full opacity-25"
    wrapperClass="flex flex-col"
    activeClass="opacity-100 w-8"
/>

<x-lit-carousel-arrows id="slider-1" color="black" />
```

Carousel

| Attribute   | Type                     | Description                                           | required |
| ----------- | ------------------------ | ----------------------------------------------------- | -------- |
| id          | String / Number          | Identifier to link with dots and arrows               | ✅       |
| for         | String / Number          | Identifier to sync with another carousel              |          |
| activeClass | String                   | class added to active slide (only ONE class allowed!) |          |
| autoplay    | Int                      | Interval in ms, when set autoplay is active           |          |
| align       | 'start', 'end', 'center' | align active slide (default: 'start' )                |          |
| loop        | Bool                     | Wether the carousel should loop infinitly             |          |

Dots

| Attribute    | Type            | Description                                         | required |
| ------------ | --------------- | --------------------------------------------------- | -------- |
| id           | String / Number | Identifier to link with carousel                    | ✅       |
| class        | String          | classlist to style the dot                          |          |
| activeClass  | String          | class added to active dot (only ONE class allowed!) |          |
| wrapperClass | String          | class applied to wrapper of dots                    |          |

Arrows

| Attribute | Type            | Description                      | required |
| --------- | --------------- | -------------------------------- | -------- |
| id        | String / Number | Identifier to link with carousel | ✅       |
| color     | String          | color applied to the arrow       |          |

## Dots

```html
<x-lit-carousel-dots
    id="slider-1"
    class="w-4 h-2 m-2 transition-all duration-300 bg-gray-500 rounded-full opacity-25"
    wrapperClass="flex flex-col"
    activeClass="opacity-100 w-8"
/>
```
