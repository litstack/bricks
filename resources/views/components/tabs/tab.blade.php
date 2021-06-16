<a
    href="#{{ $id }}"
    data-tab="{{ $id }}"
    {{ $attributes->merge(['class' => 'order-1 lit-tab relative' . ($active ? ' active  ' : '')])}}
>
    <div class="pointer-events-none">{{  $label  }}</div>
</a>

<div
    id="{{ $id }}"
    data-tab-content
    class="order-2 w-full b-tab {{ $active ? 'active' : '' }}"
>
    {{ $slot }}
</div>