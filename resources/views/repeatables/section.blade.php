<x-lit-section
    variant="{{ $rep->variant }}"
    gap="{{ $rep->gap }}"
    container="{{ $rep->container }}"
    offset="{{ $rep->offset }}"
>
    @block($rep->content)
</x-lit-section>

