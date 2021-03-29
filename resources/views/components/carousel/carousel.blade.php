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
</x-style>
<div
    {{ $attributes->merge(['class' => 'embla']) }}
    @if ($id)
    data-embla-id="{{ $id }}"
    @endif
>
    <div class="embla__container">
        {{ $slot }}
    </div>
</div>