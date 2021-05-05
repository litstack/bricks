<div
    data-lit-tabs
    data-content-classes="{{ $contentClasses }}"
    data-tab-classes="{{ $tabClasses }}"
    data-active-classes="{{ $activeClasses }}"
    class="flex flex-wrap"
    {{
    $attributes->merge([
        'class' => 'flex flex-wrap ' 
    ])
    }}
>
    {{ $slot }}
</div>
  
<x-style>
.b-tab {
    display: none;
}
.b-tab.active {
    display: block;
}
</x-style>