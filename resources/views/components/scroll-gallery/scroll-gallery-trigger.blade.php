<a 
    @if($imageId)
    href="#lit-scroll-gallery-image-{{ $imageId }}"
    @endif
    class="cursor-pointer lit-open-scroll-gallery" 
    data-gallery="{{ $id }}"
    @if($desktopOnly)
    data-desktop-only
    @endif
>
    {{ $slot }}
</a>