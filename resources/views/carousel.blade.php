<x-style>
    .embla {
      overflow: hidden;
    }
    .embla__container {
        display: flex;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -webkit-tap-highlight-color: transparent;
        margin-left: -10px;
    }
    .embla__slide, .embla__container > * {
        position: relative;
        min-width: 80%;
        padding-right: 7px;
        padding-left: 7px;
    }
</x-style>
<div
  class="embla"
  @if ($id)
  data-embla-id="{{ $id }}"
  @endif>
    <div class="embla__container">
        @block($block)
    </div>
</div>