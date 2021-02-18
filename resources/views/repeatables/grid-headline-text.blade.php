<x-lit-grid-item
    :cols="$rep->col_span" 
    :start="$rep->col_start" 
>
    <h1>
        {{ $rep->headline }}
    </h1>
    {!! $rep->text !!}
</x-lit-grid-item>
