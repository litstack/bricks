### Tooltips

```html
<x-lit-tooltip tooltip="I'am a tooltip" placement="top-start">
    <div>Hallo</div>
</x-lit-tooltip>

<x-lit-tooltip
    tooltip="I'am a tooltip with custom styles that requires a click to toggle"
    placement="bottom-start"
    tooltipClass="px-6 py-4 bg-white shadow-lg lit-tooltip text-blue-400"
    click
>
    <div>Click</div>
</x-lit-tooltip>

<x-lit-tooltip
    tooltip="I'am a tooltip that is open by default"
    placement="top-end"
    open
    tooltipClass="px-6 py-4 bg-white shadow-lg lit-tooltip text-blue-400"
>
    <div>Hallo</div>
</x-lit-tooltip>

<x-lit-tooltip placement="bottom-start" class="mt-4 ml-4">
    <x-slot name="tooltip">
        <div class="text-red-500">
            This is a styled tooltip from a slot!
        </div>
    </x-slot>
    <div>Hallo</div>
</x-lit-tooltip>
```

| Attribute    | Type   | Description                                          | required | see                     |
| ------------ | ------ | ---------------------------------------------------- | -------- | ----------------------- |
| tooltip      | String | Message to be shown as tooltip                       |          |                         |
| placement    | String | top, bottom, left, right (-start, -end)              |          | https://popper.js.org/  |
| open         | Bool   | indicates if the tooltip should be initially shown   |          |                         |
| click        | Bool   | indicates if the tooltip should be toggled via click |          |                         |
| tooltipClass | String | classes to style the tootltip                        |          |                         |
| offsetX      | Number | Offet X in px                                        |          |                         |
| offsetY      | Number | Offet Y in px                                        |          |                         |
