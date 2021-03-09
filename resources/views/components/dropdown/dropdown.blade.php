<div
    id="{{ $id }}"
    class="cursor-pointer {{ $buttonClass }}"
    data-lit-dropdown-trigger
    >
    {{ $button }}
</div>
<ul
    {{ $attributes->merge(['class' => 'hidden lit-dropdown py-1 shadow-lg z-10']) }}
    data-dropdown-id="{{ $id }}"
    data-group="{{ $group ?: '' }}"
    data-trigger-event="{{ $trigger ?: 'click' }}"
    data-placement="{{ $placement }}"
    data-offset-x="{{ $offsetX ?: 0 }}"
    data-offset-y="{{ $offsetY ?: 0 }}"
>
    @if ($noArrow != true)
    <div class="lit-dropdown-arrow" data-popper-arrow></div>
    @endif
    {{ $slot }} {{ $noArrow != true }}
</ul>


<x-style>
.lit-dropdown[data-show] {
    display: block;
}


.lit-dropdown-arrow,
.lit-dropdown-arrow::before {
    position: absolute;
    width: 8px;
    height: 8px;
    background: inherit;
}

.lit-dropdown-arrow {
    visibility: hidden;
}

.lit-dropdown-arrow::before {
    visibility: visible;
    content: '';
    transform: rotate(45deg);
}

.lit-dropdown[data-popper-placement^='top'] > .lit-dropdown-arrow {
    bottom: -4px;
}

.lit-dropdown[data-popper-placement^='bottom'] > .lit-dropdown-arrow {
    top: -4px;
}

.lit-dropdown[data-popper-placement^='left'] > .lit-dropdown-arrow {
    right: -4px;
}

.lit-dropdown[data-popper-placement^='right'] > .lit-dropdown-arrow {
    left: -4px;
}
</x-style>