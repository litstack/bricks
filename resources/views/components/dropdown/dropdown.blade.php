<div class="cursor-pointer {{ $buttonClass }}" id="{{ $id }}" data-lit-dropdown-trigger>
    {{ $button }}
</div>
<div
    {{ $attributes->merge(['class' => 'hidden lit-dropdown py-1 shadow-lg z-10']) }}
    data-dropdown-id="{{ $id }}"
    data-placement="{{ $placement }}"
    data-offset-x="{{ $offsetX ?: 0 }}"
    data-offset-y="{{ $offsetY ?: 0 }}"
>
    {{ $slot }}
</div>


<x-style>
.lit-dropdown[data-show] {
    display: block;
}
</x-style>