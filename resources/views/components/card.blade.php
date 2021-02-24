<div
    @if($href)href="{{ $href }}"@endif
    {{ $attributes->merge(['class' => 'block p-4 bg-white shadow-lg']) }}
>
    {{-- Card Header --}}
    @isset($header)
        {{ $header }}
    @endisset
    
    {{-- Card Body --}}
    <div>
        {{ $slot }}
        {{-- Link --}}
        @if($linktext && $href)
        <a href="{{ $href }}" target="{{ $blank ? '_blank' : '_self' }}" class="block pt-2">
            {{ $linktext }}
        </a>
        @endif
    </div>
    
    
    {{-- Card Image --}}
    @if($image)
    <div class="mt-4 -mx-4 -mb-4">
        @if($href)
        <a href="{{ $href }}" target="{{ $blank ? '_blank' : '_self' }}" >
        @endif
        <x-lit-image :image="$image" class="w-full"/>
        @if($href)
        </a>
        @endif
        </div>
    @endif
</div>

