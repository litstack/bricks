@if ($apiKey)
<script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&libraries=places"></script>
@endif
<script>
    var markers = [
        {{ $slot }}
    ];

    var styles = @isset($styles) {{ $styles }} @else [] @endisset;

    var center = @if($lat && $lng){
        lat: {{ $lat }},
        lng: {{ $lng }},
    }@else null @endif;

    var zoom = @if($zoom){{ $zoom }}@else 14 @endif;
</script>

<div {{ $attributes->merge(['class' => '']) }} data-lit-map="{{ $id }}"></div>

<x-style>
    .gm-style-iw, .gm-style-iw-c, .gm-style{
        background-color: transparent !important;
        box-shadow: none !important;
        border-radius: 0 !important;
        padding: 0 !important;
        max-height: unset !important;
        overflow: visible !important;
    }
    .gm-ui-hover-effect{
        display: none !important;
    }
    .gm-style .gm-style-iw-d{
        overflow: visible !important;
    }
</x-style>


