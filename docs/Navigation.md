### Navigation

The root-element of a navigation should have the `data-lit-nav` attribute to autoclose on mouseleave.

```html
<ul class="bg-blue-500" data-lit-nav>
    @foreach ($nav->main as $item)
    <x-lit-nav-item
        :item="$item"
        level="1"
        root
        class="py-4 bg-yellow-300"
        outerClass="ml-4 bg-red-300 pr-8"
        dropdownClass="bg-blue-400 shadow"
        placement="bottom-start"
        :offset="[0,10]"
        active="font-bold text-green-500"
        noArrow
    >
        <x-slot name="title">
            {{ $item->title }}
        </x-slot>
        @foreach ($item->children as $item)
        <x-lit-nav-item
            :item="$item"
            level="2"
            placement="right"
            class="px-3"
            dropdownClass="bg-white shadow-2xl"
            :offset="[0,10]"
            active="font-bold text-red-500 active-level-2"
        >
            <x-slot name="title">
                <div class="py-3 mr-2 -ml-2">
                    *
                </div>
                {{ $item->title }}
            </x-slot>
            @foreach ($item->children as $item)
            <x-lit-nav-item
                :item="$item"
                level="3"
                placement="right"
                dropdownClass="bg-white shadow-2xl"
                active="font-bold"
            />
            @endforeach
        </x-lit-nav-item>
        @endforeach
    </x-lit-nav-item>
    @endforeach
</ul>
```
