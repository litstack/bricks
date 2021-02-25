<section
    {{ $attributes->merge(['class' => 'relative overflow-hidden']) }}
>
    <div
        class="
            grid
            grid-cols-{{ $cols ?: config('lit-bricks.grid.cols') }}
            gap-{{ $gap !== null ? $gap : config('lit-bricks.grid.gap')}}
            {{ $container === false ? '' : 'container' }}
    ">
        {{ $slot }}
    </div>
</section>