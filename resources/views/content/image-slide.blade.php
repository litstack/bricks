<div>
    <x-lit-image :image="$rep->image" class="w-full" />
        <div class="absolute bottom-0 p-8 mb-10 bg-white w-96">
            <h3 class="text-xl">{{ $rep->headline }}</h3>
            {{ $rep->text }}
        </div>
</div>