<div class="ac">
    <div 
        {{ $attributes->merge(['class' => 'flex justify-between ac-header ac-trigger']) }}
    >
        <div>{{ $header }}</div>
        <div class="transition-transform duration-150 ac-open-indicator">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -8 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="fill-current"><path d="M7.071 5.314l4.95-4.95a1 1 0 1 1 1.414 1.414L7.778 7.435a1 1 0 0 1-1.414 0L.707 1.778A1 1 0 1 1 2.121.364l4.95 4.95z"></path></svg>
        </div>
    </div>
    <div class="overflow-hidden ac-panel">
        {{  $slot }}
    </div>
</div>

<x-style>
.ac.is-active > .ac-header .ac-open-indicator {
    transform: rotate(180deg)
} 
</x-style>