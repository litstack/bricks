@if ($root)
<li class="inline-block {{ $outerClass }} {{ hasActiveChild($item) || isActive($item) ? $active : '' }}">
@endif
    @if($item->children->count() < 1)
        @if ($root)
        <a
            href="{{ $item->route ?: $item->url }}"
            {{ $attributes->merge(['class' => 'inline-block']) }}
            data-hide-dropdown-group="level-{{ $level }}"
        >
            @hasslot($title)
            {{ $title }}
            @else
            {{ $item->title }}
            @endhasslot
        </a>
        @else
        <x-lit-dropdown-item
            href="{{ $item->route ?: $item->url }}"
            class="{{ 'flex items-center ' . (hasActiveChild($item) || isActive($item) ? $active : '') }}"
        >
            @hasslot($title)
            {{ $title }}
            @else
            {{ $item->title }}
            @endhasslot
        </x-lit-dropdown-item>
        @endif
    @else
    <x-lit-dropdown
        placement="{{ $placement }}"
        class="{{ $dropdownClass ?: 'bg-blue-900' }}"
        trigger="mouseenter"
        group="level-{{ $level }}"
        offsetX="{{ $offset ? $offset[0] : '0' }}"
        offsetY="{{ $offset ? $offset[1] : '0' }}"
        noArrow="{{ $noArrow ? true : false }}"
    >
        <x-slot name="button">
            <a
                href="{{ $item->route ?: $item->url }}"
                {{ $attributes->merge(['class' => 'flex items-center']) }}
            >
                @hasslot($title)
                {{ $title }}
                @else
                {{ $item->title }}
                @endhasslot
            </a>
        </x-slot>
        @hasslot($slot)
        {{ $slot }}
        @endhasslot
    </x-lit-dropdown>
    @endif
@if ($root)
</li>
@endif  