@if ($root)
<li class="inline-block {{ $outerClass }} {{ hasActiveChild($item) || isActive($item) ? $active : '' }}" >
@endif
    @if($item->children->count() < 1)
        @if ($root)
        <a
            href="{{ $item->route ?: $item->url }}"
            {{ $attributes->merge(['class' => 'inline-block '. (hasActiveChild($item) || isActive($item) ? $active : '')]) }}
            data-hide-dropdown-group="level-{{ $level }}"
            target="{{ $item->target_blank ? '_blank' : '' }}"
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
            {{ $attributes->merge(['class' => (hasActiveChild($item) || isActive($item) ? $active : '')]) }}
            target="{{ $item->target_blank ? '_blank' : '' }}"
        >
            <div data-hide-dropdown-group="level-{{ $level }}" class="flex items-center">
                @hasslot($title)
                {{ $title }}
                @else
                {{ $item->title }}
                @endhasslot
            </div>
        </x-lit-dropdown-item>
        @endif
    @else
        @if (!$root)
        <li >
        @endif
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
                        {{ $attributes->merge(['class' => 'flex items-center '. (hasActiveChild($item) || isActive($item) ? $active : '')]) }}
                        target="{{ $item->target_blank ? '_blank' : '' }}"
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
        @if (!$root)
        </li>
        @endif
    @endif
@if ($root)
</li>
@endif  
