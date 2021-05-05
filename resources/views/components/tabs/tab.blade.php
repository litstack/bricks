<a
    href="#{{ $id }}"
    data-tab="{{ $id }}"
    {{ $attributes->merge(['class' => 'order-1 lit-tab px-2 rounded-full' . ($active ? ' active  ' : '')])}}
>
    {{ $label }}
</a>

<div
    id="{{ $id }}"
    data-tab-content
    class="order-2 w-full b-tab {{ $active ? 'active' : '' }}"
>
    {{ $slot }}
</div>