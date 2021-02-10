import EmblaCarousel from 'embla-carousel';
const emblaNodes = document.getElementsByClassName('embla');

const disablePrevNextBtns = (prevBtn, nextBtn, embla) => {
    return () => {
        if (embla.canScrollPrev()) prevBtn.removeAttribute('disabled');
        else prevBtn.setAttribute('disabled', 'disabled');

        if (embla.canScrollNext()) nextBtn.removeAttribute('disabled');
        else nextBtn.setAttribute('disabled', 'disabled');
    };
};

for (let index = 0; index < emblaNodes.length; index++) {
    const emblaNode = emblaNodes[index];

    const embla = EmblaCarousel(emblaNode, {
        align: 'start',
    });

    if (emblaNode.dataset.emblaId) {
        const prevBtn = document.querySelectorAll('[data-embla-prev]')[0];
        const nextBtn = document.querySelectorAll('[data-embla-next]')[0];

        prevBtn.addEventListener('click', embla.scrollPrev, false);
        nextBtn.addEventListener('click', embla.scrollNext, false);

        embla.on('select', disablePrevNextBtns(prevBtn, nextBtn, embla));
        embla.on('init', disablePrevNextBtns(prevBtn, nextBtn, embla));
    }
}
