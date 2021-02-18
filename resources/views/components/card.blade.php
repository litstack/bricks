@php
    $tag = isset($route) || isset($link) ? 'a' : 'div';
    $href = isset($route) ? $route : (isset($link) ? $link : null);
@endphp
<div
    @if($href)href="{{ $href }}"@endif
    class="block p-4 shadow-sm"
>
    {{-- Card Header --}}
    @if($topline)
        <div class="text-xs">{{ $topline }}</div>
    @endif
    @if($headline)
        <div class="text-lg font-semibold">{{ $headline }}</div>
    @endif
    @if($subline)
        <div class="text-base">{{ $subline }}</div>
    @endif
    
    {{-- Card Body --}}
    <div class="mt-2">
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

