<x-lit-section>
    <div
        class="
            relative col-span-1
            @if($start)
            col-start-{{ $start+1 }}
            @endif
            @if($end)
            col-end-{{ $end + 2 }}
            @endif
        "
        id="{{ $id }}"
    >
    </div>
</x-lit-section>

<div
    class="
        relative flex mx-auto maxWidthElement
        {{ $start ? 'justify-end' : '' }}
    "
    data-ref="{{ $id }}"
    data-left="{{ $start ? false : true }}"
>
    <div class="edgeDropContainer">
        {{ $slot }}
    </div>
</div>