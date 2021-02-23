<div class="modal micromodal-slide" id="{{ $id }}" aria-hidden="true">
    <div class="fixed top-0 bottom-0 left-0 right-0 flex items-center justify-center bg-black bg-opacity-50 modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="container relative max-h-screen p-8 bg-white rounded-lg modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-{{ $id }}-title">
            <header class="flex justify-between w-full">
                <div class="mr-6">
                    @if ($title)
                            <h2>
                            {{ $title }}
                            </h2>
                    @endif
                </div>
                <button class="absolute top-0 right-0 mt-1 mr-2 modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main>
                {{ $slot }}
            </main>
            @if (!$hideFooter)
                <footer class="flex justify-end">
                    <button class="" data-micromodal-close aria-label="Close this dialog window">
                        Close
                    </button>
                </footer>
            @endif
        </div>
    </div>
</div>

<x-style>
    .modal__close {
        background: transparent;
        border: 0;
    }

    .modal__close:before {
        content: "\2715";
    }

    /**************************\
    Demo Animation Style
    \**************************/
    @keyframes mmfadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes mmfadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }

    @keyframes mmslideIn {
    from { transform: translateY(15%); }
        to { transform: translateY(0); }
    }

    @keyframes mmslideOut {
        from { transform: translateY(0); }
        to { transform: translateY(-10%); }
    }

    .micromodal-slide {
        display: none;
    }

    .micromodal-slide.is-open {
        display: block;
    }

    .micromodal-slide[aria-hidden="false"] .modal__overlay {
        animation: mmfadeIn .3s cubic-bezier(0.0, 0.0, 0.2, 1);
    }

    .micromodal-slide[aria-hidden="false"] .modal__container {
        animation: mmslideIn .3s cubic-bezier(0, 0, .2, 1);
    }

    .micromodal-slide[aria-hidden="true"] .modal__overlay {
        animation: mmfadeOut .3s cubic-bezier(0.0, 0.0, 0.2, 1);
    }

    .micromodal-slide[aria-hidden="true"] .modal__container {
        animation: mmslideOut .3s cubic-bezier(0, 0, .2, 1);
    }

    .micromodal-slide .modal__container,
    .micromodal-slide .modal__overlay {
        will-change: transform;
    }
</x-style>