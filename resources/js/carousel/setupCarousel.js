import EmblaCarousel from 'embla-carousel';
import { setupPrevNextBtns, disablePrevNextBtns } from './prevAndNextButtons';
import { setupDotBtns, generateDotBtns, selectDotBtn } from './dotButtons';
import { onThumbClick, followMainCarousel } from './thumbButtons';
import { autoplay } from './autoplay';

const init = emblaNode => {
    const carousel = emblaNode.querySelector('.embla__viewport');

    /**
     * Settings
     *
     */
    const loop = emblaNode.hasAttribute('data-embla-loop');
    const align = emblaNode.getAttribute('data-embla-align');
    const selectedClass = emblaNode.getAttribute('data-embla-active-class');
    const speed = emblaNode.getAttribute('data-embla-speed') || null;

    /**
     * Init Carousel
     *
     */
    return EmblaCarousel(carousel, {
        align: align || 'start',
        selectedClass,
        loop,
        speed: speed || 10,
        containScroll: null,
    });
};

export const setupCarousel = emblaNode => {
    // skip synced
    if (emblaNode.hasAttribute('data-embla-for')) {
        return;
    }

    /**
     * Init Carousel
     *
     */
    const embla = init(emblaNode);

    if (emblaNode.dataset.emblaId) {
        /**
         * Setup Arrows
         *
         */
        const id = emblaNode.dataset.emblaId;
        const prevBtn = document.querySelectorAll(
            `[data-embla-prev="${id}"]`
        )[0];
        const nextBtn = document.querySelectorAll(
            `[data-embla-next="${id}"]`
        )[0];

        if (prevBtn && nextBtn) {
            setupPrevNextBtns(prevBtn, nextBtn, embla);

            embla.on('select', disablePrevNextBtns(prevBtn, nextBtn, embla));
            embla.on('init', disablePrevNextBtns(prevBtn, nextBtn, embla));
        }

        /**
         * Setup Dots
         *
         */
        const dots = document.querySelector(`[data-embla-dots="${id}"]`);

        if (dots) {
            const dotsArray = generateDotBtns(id, dots, embla);
            const activeClass = dots.getAttribute(
                'data-embla-dots-active-class'
            );

            setupDotBtns(dotsArray, embla);
            embla.on('init', selectDotBtn(dotsArray, embla, activeClass));
            embla.on('select', selectDotBtn(dotsArray, embla, activeClass));
        }

        /**
         * Setup Autoplay
         *
         */
        const autoplayInterval = emblaNode.getAttribute('data-embla-autoplay');

        if (autoplayInterval) {
            const autoplayer = autoplay(embla, autoplayInterval);
            embla.on('init', autoplayer.play);
        }

        /**
         * Setup Sync
         *
         */
        const synced = document.querySelectorAll(`[data-embla-for="${id}"]`);

        for (let i = 0; i < synced.length; i++) {
            const thumbCarousel = init(synced[i]);
            const thumbCarouselMarkup = synced[i];

            let eventName = 'click';

            if (thumbCarouselMarkup.hasAttribute('data-mouseover')) {
                eventName = 'mouseover';
            }

            thumbCarousel.slideNodes().forEach((thumbNode, index) => {
                const onClick = onThumbClick(embla, thumbCarousel, index);
                thumbNode.addEventListener(eventName, onClick, false);
            });

            const syncThumbCarousel = followMainCarousel(embla, thumbCarousel);
            embla.on('select', syncThumbCarousel);
            thumbCarousel.on('init', syncThumbCarousel);
        }
    }
};
