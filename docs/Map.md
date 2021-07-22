# Map

A component to show google-maps. Make shure to include the `google-maps-api`, e.g:

```html
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>
```

## Usage

### Simple map

Show a map with a simple marker that will be panned to the marker automatically

```html
<x-lit-map class="mt-32 h-96" zoom="12">
    <x-lit-map-marker lat="54.325" lng="10.122" />
</x-lit-map>
```

### Marker with an info window

```html
<x-lit-map-marker lat="54.325" lng="10.122">
    <div class="p-8">Hello World!</div>
</x-lit-map-marker>
```

### Marker with a custom Pin-Icon.

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
        <div class="p-8">Hello World!</div>
    </div>
</x-lit-map-marker>
```

### Filter markers on map

```html
<input type="checkbox" value="1" class="lit-map-filter" />Category 1
<input type="checkbox" value="2" class="lit-map-filter" />Category 2
<input type="checkbox" value="3" class="lit-map-filter" />Category 3

<x-lit-map class="mt-32 h-96" zoom="12">
    <x-lit-map-marker lat="54.323" lng="10.126" :categories="[1,2]" />
    <x-lit-map-marker lat="54.325" lng="10.122" :categories="[1]" />
</x-lit-map>
```

### Clustering

In order to make use of the clustering feature you need to include the clustering script:

```html
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
```

You can cluster your pins by using the `cluster`slot and provide up to 5 `<x-lit-map-cluster />`. Each cluster should be passed a relativly simple inline svg in the main slot.

```html
<x-lit-map class="mt-32 h-96" zoom="12">
    <x-lit-map-marker lat="54.323" lng="10.126" />
    <x-lit-map-marker lat="54.325" lng="10.122" />

    <x-slot name="cluster">
        <x-lit-map-cluster
            width="30"
            height="30"
            fontSize="12"
            fontColor="white"
        >
            <svg
                viewBox="0 0 834 834"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                stroke-linejoin="round"
                stroke-miterlimit="2"
            >
                <path
                    d="M416.667 0l360.844 208.333V625L416.667 833.333 55.823 625V208.333L416.667 0z"
                    fill="black"
                />
            </svg>
        </x-lit-map-cluster>
        <x-lit-map-cluster
            width="40"
            height="40"
            fontSize="12"
            fontColor="white"
        >
            <svg
                viewBox="0 0 834 834"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                stroke-linejoin="round"
                stroke-miterlimit="2"
            >
                <path
                    d="M416.667 0l360.844 208.333V625L416.667 833.333 55.823 625V208.333L416.667 0z"
                    fill="green"
                />
            </svg>
        </x-lit-map-cluster>
    </x-slot>
</x-lit-map>
```

Styled map

```html
<x-lit-map class="mt-32 h-96" zoom="12">
    <x-slot name="styles">
        <!-- Your styles here, e.g. from snazzymaps.com -->
        [ { "featureType": "all", "elementType": "geometry.fill", "stylers": [ {
        "weight": "2.00" } ] } ]
    </x-slot>
</x-lit-map>
```

## Attributes

Map
| Attribute | Type | Description | required |
| --------- | ------ | ------------------------- | -------- |
| zoom | Number | Zoom Level (0-21) |   |
| lat, lng | Float | Coordinates to center map |   |
| mouseover | Boolean | Infowindows for markers appear on hover |   |

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

Cluster

| Attribute | Type   | Description                      | required |
| --------- | ------ | -------------------------------- | -------- |
| width     | Number | Width of the cluster icon in px  | ✅       |
| height    | Number | Height of the cluster icon in px | ✅       |
| fontSize  | Number | Font size                        | ✅       |
| fontColor | Strnig | Font color                       | ✅       |
