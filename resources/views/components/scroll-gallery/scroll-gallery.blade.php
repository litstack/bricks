<div class="fixed top-0 z-50 w-full h-full transition-opacity duration-500 origin-center bg-white opacity-0 pointer-events-none lit-scroll-gallery" id="{{ $id }}">
    <div class="absolute top-0 right-0 p-8">
        <button class="relative z-50 bg-white cursor-pointer lit-close-scroll-gallery">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z"></path></svg>
        </button>
    </div>
    <div class="w-full h-full overflow-y-auto">
        @foreach ($images as $image)
        <div class="object-contain w-full h-full p-12 lit-scroll-gallery__image" id="lit-scroll-gallery-image-{{ $image->id }}">
            <x-lit-image :image="$image" class="w-full h-full" />
        </div>
        @endforeach
    </div>
</div>

<x-style lang="scss">
    .lit-scroll-gallery {
        left: -100vw;
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
            left: 0;
            opacity:1;
            transform:scale(1);
            pointer-events:all;
         }
    }
</x-style>