# Edgedrop

```html
<x-lit-edgedrop offset="4">
    <div class="bg-green-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi impedit
        libero repudiandae minus maxime temporibus, quas iusto soluta laudantium
        sunt eos explicabo expedita doloribus reiciendis ex in similique ipsam
        amet!
    </div>
</x-lit-edgedrop>
<x-lit-edgedrop end offset="4">
    <x-slot name="remainder">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque iure
        minus assumenda accusamus nobis? In aliquid porro rem ea, totam at
        distinctio quaerat odit minus nisi voluptates natus tenetur fugiat!
    </x-slot>
    <div class="bg-green-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi impedit
        libero repudiandae minus maxime temporibus, quas iusto soluta laudantium
        sunt eos explicabo expedita doloribus reiciendis ex in similique ipsam
        amet!
    </div>
</x-lit-edgedrop>
```

| Attribute | Type   | Description                         | required |
| --------- | ------ | ----------------------------------- | -------- |
| offset    | Number | Width of the remaining part in cols |          |
| end       | Bool   | Align edgedrop right                |          |
