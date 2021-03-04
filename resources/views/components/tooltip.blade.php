<div
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'inline-block lit-tooltip-trigger']) }}
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