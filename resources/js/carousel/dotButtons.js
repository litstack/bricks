export const setupDotBtns = (dotsArray, embla) => {
    dotsArray.forEach((dotNode, i) => {
        dotNode.addEventListener('click', () => embla.scrollTo(i), false);
    });
};

export const generateDotBtns = (id, dots, embla) => {
    const template = document.querySelector(
        `[data-embla-dots-template="${id}"]`
    ).innerHTML;
    dots.innerHTML = embla.scrollSnapList().reduce(acc => acc + template, '');
    return [].slice.call(dots.querySelectorAll('.embla__dot'));
};

export const selectDotBtn = (dotsArray, embla, activeClass) => () => {
    const previous = embla.previousScrollSnap();
    const selected = embla.selectedScrollSnap();
    activeClass.split(' ').forEach(cl => {
        dotsArray[previous].classList.remove(cl);
        dotsArray[selected].classList.add(cl);
    });
};
