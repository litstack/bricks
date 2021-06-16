<div
    {{ $attributes->merge(['class' => 'embla']) }}
    @if ($id)
    data-embla-id="{{ $id }}"
    @endif
    @if ($for)
    data-embla-for="{{ $for }}"
    @endif
    {{ $loop  ? 'data-embla-loop' : '' }}
    data-embla-active-class="{{ $activeClass }}"
    data-embla-align="{{ $align }}"
    data-embla-autoplay="{{ $autoplay }}"
    data-embla-speed="{{ $speed }}"
>
    <div class="embla__viewport">
        <div class="embla__container">
            {{ $slot }}
        </div>
    </div>
</div>
<x-style>
    .embla {
        overflow: hidden;
    }
    .embla__container {
        display: flex;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -webkit-tap-highlight-color: transparent;
    }
    .embla__viewport {
        overflow: hidden;
        width: 100%;
    }
    .embla__viewport.is-draggable {
        cursor: move;
        cursor: grab;
    }

    .embla__viewport.is-dragging {
        cursor: grabbing;
    }
</x-style>