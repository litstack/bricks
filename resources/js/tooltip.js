import { createPopper } from '@popperjs/core';

const elements = document.querySelectorAll('.lit-tooltip-trigger');

elements.forEach(element => {
    const id = element.getAttribute('id');

    const tooltip = document.querySelector(`[data-tooltip-id="${id}"]`);

    const offset = {
        name: 'offset',
        options: {
            offset: [
                parseInt(tooltip.getAttribute('data-offset-x')),
                parseInt(tooltip.getAttribute('data-offset-y')),
            ],
        },
    };

    const placement = {
        placement: tooltip.getAttribute('data-placement') || 'bottom',
    };

    const options = {
        ...placement,
        modifiers: [{ ...offset }],
    };

    const popperInstance = createPopper(element, tooltip, options);

    function show() {
        // Make the tooltip visible
        tooltip.setAttribute('data-show', '');

        // Enable the event listeners
        popperInstance.setOptions({
            modifiers: [
                { name: 'eventListeners', enabled: true },
                { ...offset },
            ],
        });

        // Update its position
        popperInstance.update();
    }

    function hide() {
        // Hide the tooltip
        tooltip.removeAttribute('data-show');

        // Disable the event listeners
        popperInstance.setOptions({
            modifiers: [
                { name: 'eventListeners', enabled: false },
                { ...offset },
            ],
        });
    }

    const showEvents = ['mouseenter', 'focus'];
    const hideEvents = ['mouseleave', 'blur'];

    showEvents.forEach(event => {
        element.addEventListener(event, show);
    });

    hideEvents.forEach(event => {
        element.addEventListener(event, hide);
    });
});
