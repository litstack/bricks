{{-- <ul class="bg-blue-100">
    @foreach ($nav->main as $item)
    <li class="inline-block {{ hasActiveChild($item) || isActive($item) ? 'bg-red-500' : 'bg-blue-600' }}">
        @if($item->children->count() < 1)
        <a href="{{ $item->route ?: $item->url }}">
            {{ $item->title }}
        </a>
        @else
        <x-lit-dropdown
            placement="bottom-start"
            class="bg-blue-100 rounded-md"
            buttonClass="px-2"
            trigger="mouseenter"
            group="level1"
            offsetY="10"
        >
            <x-slot name="button">
                <a href="{{ $item->route ?: $item->url }}">
                    {{ $item->title }}
                </a>
            </x-slot>
            @foreach ($item->children as $item)
           
                @if($item->children->count() < 1)
                <x-lit-dropdown-item href="{{ $item->route ?: $item->url }}" class="{{ hasActiveChild($item) || isActive($item) ? 'bg-red-500' : 'bg-blue-600' }}">
                    {{ $item->title }}
                </x-lit-dropdown-item>
                @else
                <x-lit-dropdown
                    placement="right"
                    class="bg-green-200 rounded-md"
                    buttonClass="px-2 {{ hasActiveChild($item) || isActive($item) ? 'bg-red-500' : 'bg-blue-600' }}"
                    trigger="mouseenter"
                    group="level2"
                    offsetY="5"
                >
                    <x-slot name="button">
                        XX {{ $item->title }}
                    </x-slot>
                    @foreach ($item->children as $item)
                        <x-lit-dropdown-item href="{{ $item->route ?: $item->url }}" class="{{ hasActiveChild($item) || isActive($item) ? 'bg-red-500' : 'bg-blue-600' }}">
                            {{ $item->title }}
                        </x-lit-dropdown-item>
                    @endforeach
                </x-lit-dropdown>
                @endif
                
            @endforeach
        </x-lit-dropdown>
        @endif
    </li>
    @endforeach
</ul> --}}
<ul class="bg-blue-100">
    @foreach ($nav->main as $item)
    <x-lit-nav-item :item="$item" >
        
    </x-lit-nav-item>
    @endforeach
</ul>


