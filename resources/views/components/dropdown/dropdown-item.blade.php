<li>
    <{{ $tag }}
        @if($href)
        href="{{ $href }}"
        @endif
        {{ $attributes->merge(['class' => 'relative z-10 block px-3 cursor-pointer ']) }}
        data-lit-dropdown-item
    >
        {{ $slot }}
    </{{ $tag }}>
</li>