{
    position: {
        lat: {{ $lat }},
        lng: {{ $lng }},
    },
    @if (is_array($categories))
    categories: [{{ implode(',', $categories) }}],
    @endif
    @hasslot($slot)
    infowindow: '{!! trim(preg_replace('/\s\s+/', ' ', $slot)) !!}',
    @endhasslot
    @isset($pin)    
    {{ $pin }}
    @endisset
},