<div
    class="
    col-span-{{ $cols ?: config('lit-bricks.grid.cols') }}
    col-start-{{ $start }}
    "
>
    {{ $slot }}
</div>