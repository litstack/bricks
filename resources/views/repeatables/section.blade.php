<x-lit-section
    class="{{ $rep->class }}"
    gap="{{ $rep->gap }}"
    container="{{ $rep->container }}"
    offset="{{ $rep->offset }}"
>
    @block($rep->content)
</x-lit-section>

