<div
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'inline-block lit-tooltip-trigger']) }}
    {{ $click ? 'data-tooltip-click' : '' }}
>
    {{ $slot }}
</div>

<div
    role="tooltip"
    data-tooltip-id="{{ $id }}"
    data-placement="{{ $placement }}"
    data-offset-x="{{ $offsetX ?: 0 }}"
    data-offset-y="{{ $offsetY ?: 0 }}"
    {{ $open ? 'data-show' : '' }}
    class="hidden {{ $tooltipClass ?: 'px-2 py-1 bg-gray-800 text-white shadow-lg lit-tooltip rounded-sm text-xs' }}"
>
    {{ $tooltip }}
    @if ($click)
        <div class="absolute top-0 right-0 cursor-pointer" data-tooltip-close="{{ $id }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z"></path></svg>
        </div>
    @endif
    <div class="lit-tooltip-arrow" data-popper-arrow></div>
</div>

<x-style>
.lit-tooltip[data-show] {
    display: block;
}

.lit-tooltip-arrow,
.lit-tooltip-arrow::before {
    position: absolute;
    width: 8px;
    height: 8px;
    background: inherit;
}

.lit-tooltip-arrow {
    visibility: hidden;
}

.lit-tooltip-arrow::before {
    visibility: visible;
    content: '';
    transform: rotate(45deg);
}

.lit-tooltip[data-popper-placement^='top'] > .lit-tooltip-arrow {
    bottom: -4px;
}

.lit-tooltip[data-popper-placement^='bottom'] > .lit-tooltip-arrow {
    top: -4px;
}

.lit-tooltip[data-popper-placement^='left'] > .lit-tooltip-arrow {
    right: -4px;
}

.lit-tooltip[data-popper-placement^='right'] > .lit-tooltip-arrow {
    left: -4px;
}
</x-style>