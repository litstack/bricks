const elements = document.querySelectorAll('[data-lit-edgedrop]');

const setContainerWidth = element => {
    const remainderPreset = element.querySelector(
        '[data-lit-edgedrop-remainder-preset]'
    );
    const mainPreset = element.querySelector('[data-lit-edgedrop-main-preset]');

    const remainder = element.querySelector('[data-lit-edgedrop-remainder]');

    if (remainder) {
        remainder.style.width =
            remainderPreset.getBoundingClientRect().width + 'px';
    }

    const main = element.querySelector('[data-lit-edgedrop-main]');
    const containerWidth = element.getBoundingClientRect().width;
    const mainStart = mainPreset.getBoundingClientRect().x;

    main.style.width = containerWidth - mainStart + 'px';

    /**
     * Shrink
     *
     */
    const shrink = main.querySelector('[data-shrink]');
    if (shrink) {
        shrink.style.width = mainPreset.getBoundingClientRect().width + 'px';
    }
};

elements.forEach(element => {
    setContainerWidth(element);
    window.addEventListener('resize', () => {
        setContainerWidth(element);
    });
});
