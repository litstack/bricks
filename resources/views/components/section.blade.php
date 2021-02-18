<section
    {{ $attributes->merge(['class' => $variant]) }}
>
    <div
        class="
            grid
            grid-cols-{{ config('lit-bricks.grid.cols') }}
            px-{{ config('lit-bricks.section.px') }}
            py-{{ config('lit-bricks.section.py') }}
            {{ $gap ? 'gap-'.config('lit-bricks.grid.gap') : '' }}
            {{ $container ? 'container' : '' }}
    ">
        {{ $slot }}
    </div>
</section>


