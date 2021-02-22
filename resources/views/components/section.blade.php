<section
    {{ $attributes->merge(['class' => $variant]) }}
>
    <div
        class="
            grid
            grid-cols-{{ config('lit-bricks.grid.cols') }}
            px-{{ $px }}
            py-{{ $py }}
            {{ $gap ? 'gap-'.config('lit-bricks.grid.gap') : '' }}
            {{ $container ? 'container' : '' }}
    ">
        @if ($title)
            <div class="col-span-{{ config('lit-bricks.grid.cols') }}">
                <h2>{{ $title }}</h2>
            </div>
        @endif
        {{ $slot }}
    </div>
</section>


