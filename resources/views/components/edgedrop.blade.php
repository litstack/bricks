<div data-lit-edgedrop {{ $attributes->merge(['class' => '']) }}>
    <x-lit-section>
        <div
            class="
                relative  
                col-span-{{ $offset }}
            "
            data-lit-edgedrop-remainder-preset
        >
        </div>
        <div
            class="
                relative  
                col-span-{{ config('lit-bricks.grid.cols') - $offset }}
            "
            data-lit-edgedrop-main-preset
        >
        </div>
    </x-lit-section>
    
    <div
        class="relative flex mx-auto @if($end) flex-row-reverse @endif" 
    > 
        <div data-lit-edgedrop-main>
            {{ $slot }}
        </div>
        @isset($remainder)
        <div data-lit-edgedrop-remainder class="mx-{{ config('lit-bricks.grid.gap')}}">
            {{ $remainder }}
        </div>
        @endisset
    </div>
</div>