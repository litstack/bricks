<x-lit-grid-item
    :cols="$rep->col_span" 
    :start="$rep->col_start" 
>
    <x-lit-card
        :route="$rep->route"
        :link="$rep->link"
        :linktext="$rep->linktext"
        :blank="$rep->blank"
        :image="$rep->image"
        >
        <x-slot name="topline">
            {{ $rep->topline }}
        </x-slot>
        <x-slot name="headline">
            {{ $rep->headline }}
        </x-slot>
        <x-slot name="subline">
            {{ $rep->subline }}
        </x-slot>
        {{ $rep->body }}
    </x-lit-card>
</x-lit-grid-item>
