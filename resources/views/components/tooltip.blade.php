<div id="{{ $id }}" class="inline-block lit-tooltip">
    {{ $slot }}
</div>

<div role="tooltip" data-tooltip-id="{{ $id }}">
    {{ $tooltip }}
    <div class="lit-tooltip-arrow" data-popper-arrow></div>
</div>

<x-style>
.lit-tooltip {
    background: #333;
    color: white;
    font-weight: bold;
    padding: 4px 8px;
    font-size: 13px;
    border-radius: 4px;
    display: none;
}

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