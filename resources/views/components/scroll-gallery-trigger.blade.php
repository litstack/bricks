<a 
href="#lit-scroll-gallery-image-{{ $imageId }}" 
class="lit-open-scroll-gallery cursor-pointer" 
data-gallery="{{ $id }}"
@if($desktopOnly)
data-desktop-only
@endif
>
    {{ $slot }}
</a>