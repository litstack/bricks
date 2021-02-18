@if ($images)
<x-style>
    .embla {
        overflow: hidden;
    }
    .embla__image_container {
        display: flex;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -webkit-tap-highlight-color: transparent;
    }
    .embla__slide, .embla__image_container > * {
        position: relative;
        min-width: 100%;
    }
</x-style>
<div
    class="embla"
    @if ($id)
    data-embla-id="{{ $id }}"
    @endif
>
    <div class="embla__image_container">
        @foreach ($images as $image)
        <div>
            <x-lit-image :image="$image" class="w-full" />
        </div>
        @endforeach
    </div>
</div>
@endif