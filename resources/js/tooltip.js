import { createPopper } from '@popperjs/core';

const tooltips = document.querySelectorAll('.lit-tooltip');

tooltips.forEach(element => {
    const id = element.getAttribute('id');

    const tooltip = document.querySelector(`[data-tooltip-id="${id}"]`);

    const popper = createPopper(element, tooltip, {
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
        ],
    });
    const showEvents = ['mouseenter', 'focus'];
    const hideEvents = ['mouseleave', 'blur'];

    showEvents.forEach(event => {
        element.addEventListener(event, show(tooltip, popper));
    });

    hideEvents.forEach(event => {
        element.addEventListener(event, hide(tooltip, popper));
    });

    function show(tooltip, popper) {
        // Make the tooltip visible
        tooltip.setAttribute('data-show', '');

        // Enable the event listeners
        popper.setOptions({
            modifiers: [{ name: 'eventListeners', enabled: true }],
        });

        // Update its position
        popper.update();
    }

    function hide(tooltip, popper) {
        // Hide the tooltip
        tooltip.removeAttribute('data-show');

        // Disable the event listeners
        popper.setOptions({
            modifiers: [{ name: 'eventListeners', enabled: false }],
        });
    }
});
