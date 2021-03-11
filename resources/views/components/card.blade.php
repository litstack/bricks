<div class="relative {{ $justify ? 'h-full' : '' }}">
    <div class="absolute top-0 left-0 w-full h-full shadow-md "></div>
    <div
        {{ $attributes->merge(['class' => 'flex flex-col justify-between h-full relative p-8 z-10 bg-white']) }}
    >
        <div>
            {{-- Card Header --}}
            @isset($header)
                {{ $header }}
            @endisset
            {{-- Card Body --}}
            <div>
                {{ $slot }}
                {{-- Link --}}
                @if($href && !$image)
                <a href="{{ $href }}" target="{{ $blank ? '_blank' : '_self' }}" class="block pt-2">
                    {{ $linktext ?: $href }}
                </a>
                @endif
            </div>
        </div>
    
    
       {{-- Card Image --}}
        @if($image)
        <div class="relative mt-10 -mx-8 -mb-8">
            @if($href)
            <a href="{{ $href }}" target="{{ $blank ? '_blank' : '_self' }}" >
                @endif
                <x-lit-image :image="$image" class="w-full"/>
                @if($href)
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-12 mr-8 -mt-6 text-white border-4 border-white rounded-full bg-green-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="w-6 h-6 fill-current icon__icon"><path d="M10.586 5.657l-3.95-3.95A1 1 0 0 1 8.05.293l5.657 5.657a.997.997 0 0 1 0 1.414L8.05 13.021a1 1 0 1 1-1.414-1.414l3.95-3.95H1a1 1 0 1 1 0-2h9.586z"></path></svg>
                </div>
            </a>
            @endif
        </div>
        @endif
    </div>
    
</div>
