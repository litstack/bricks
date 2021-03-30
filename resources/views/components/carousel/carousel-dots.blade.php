<div
    data-embla-dots="{{ $id }}"
    data-embla-dots-active-class="{{ $activeClass }}"
    class="{{ $wrapperClass }}"
>
</div>

<script type="text/template" data-embla-dots-template="{{ $id }}">
    <button
        {{ $attributes->merge(['class' => 'embla__dot']) }}
        type="button">
    </button>
</script>