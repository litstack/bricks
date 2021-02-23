
<x-style lang="scss">
    .lit-scroll-gallery {
        &__image {
            max-height:100vh;
            .image-container {
                height:100%;
                width:auto;
            }
            img {
                height:100%;
                width:calc(100% - 100px);
                object-fit:contain;
                margin:auto;
                @media(max-width:768px) {
                    width:100%;
                }
            }
        }
         &.is-visible {
            opacity:1;
            transform:scale(1);
            pointer-events:all;
         }
    }
</x-style>

<div class="lit-scroll-gallery fixed top-0 left-0 w-full h-full bg-white z-50 opacity-0 transition-all duration-500 origin-center scale-95 pointer-events-none" id="{{ $id }}">
    <div class="fixed top-0 right-0 p-8">
        <button class="relative lit-close-scroll-gallery bg-white z-50 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z"></path></svg>
        </button>
    </div>
    <div class="overflow-y-auto w-full h-full">
        @foreach ($images as $image)
        <div class="w-full h-full object-contain lit-scroll-gallery__image p-12" id="lit-scroll-gallery-image-{{ $image->id }}">
            <x-lit-image :image="$image" class="w-full h-full" />
        </div>
        @endforeach
    </div>
</div>