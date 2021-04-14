@if ($apiKey)
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&libraries=places"></script>
@endif
<script>
    var encodeInlineSvg = function (svg) {
        var encoded = window.btoa(svg);

        return ('data:image/svg+xml;base64,' + encoded);
    };


    var markers = [
        {{ $slot }}
    ];

    var styles = @isset($styles) {{ $styles }} @else [] @endisset;

    
    var clusterStyles = @isset($cluster)[{{ $cluster }}]; @else null @endisset

    var center = @if($lat && $lng){
        lat: {{ $lat }},
        lng: {{ $lng }},
    }@else null @endif;

    var zoom = @if($zoom){{ $zoom }}@else 14 @endif;

    {{ $script }}
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


