{
    width: {{ $width }},
    height: {{ $height }},
    url: encodeInlineSvg('{{ $slot }}'),
    textColor: "{{ $fontColor ?: 'white' }}",
    textSize: {{ $fontSize ?: 12 }}
},