<{{ $tag }}
    @if($href)
    href="{{ $href }}"
    @endif
    class="relative z-10 block px-3 cursor-pointer hover:bg-blue-400"
    data-lit-dropdown-item
>
    {{ $slot }}
</{{ $tag }}>