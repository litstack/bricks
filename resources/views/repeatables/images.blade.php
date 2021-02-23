<div>
    @foreach ($rep->images as $image)
    <x-lit-image :image="$image" class="w-full" />
    @endforeach
</div>