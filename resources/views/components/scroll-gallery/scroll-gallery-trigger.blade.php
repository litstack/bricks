<a 
    @if($imageId)
    href="#lit-scroll-gallery-image-{{ $imageId }}"
    @endif
    class="cursor-pointer lit-open-scroll-gallery" 
    data-gallery="{{ $id }}"
>
    {{ $slot }}
</a>