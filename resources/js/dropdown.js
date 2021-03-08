import { createPopper } from '@popperjs/core';

const elements = document.querySelectorAll('[data-lit-dropdown-trigger]');

elements.forEach(element => {
    const id = element.getAttribute('id');

    const dropdown = document.querySelector(`[data-dropdown-id="${id}"]`);
    const items = dropdown.querySelectorAll(`[data-lit-dropdown-item]`);

    const offset = {
        name: 'offset',
        options: {
            offset: [
                parseInt(dropdown.getAttribute('data-offset-x')),
                parseInt(dropdown.getAttribute('data-offset-y')),
            ],
        },
    };

    const placement = {
        placement: dropdown.getAttribute('data-placement') || 'bottom-end',
    };

    const options = {
        ...placement,
        modifiers: [{ ...offset }],
    };

    const popperInstance = createPopper(element, dropdown, options);

    function show() {
        // Make the dropdown visible
        dropdown.setAttribute('data-show', '');

        // Enable the event listeners
        popperInstance.setOptions({
            modifiers: [
                { name: 'eventListeners', enabled: true },
                { ...offset },
            ],
        });

        // Update its position
        popperInstance.update();

        window.addEventListener('click', clickOutside);
        window.addEventListener('keydown', handleKeydown);
    }

    const clickOutside = function(e) {
        let target = e.target || e.srcElement;
        if (element == target || dropdown.contains(target)) {
            return;
        }
        hide();
    };

    function handleKeydown(e) {
        let evt = e || window.event;
        var isEscape = false;
        if ('key' in evt) {
            isEscape = evt.key === 'Escape' || evt.key === 'Esc';
        } else {
            isEscape = evt.keyCode === 27;
        }
        if (isEscape) {
            hide();
        }
    }

    function hide() {
        // Hide the dropdown
        dropdown.removeAttribute('data-show');

        // Disable the event listeners
        popperInstance.setOptions({
            modifiers: [
                { name: 'eventListeners', enabled: false },
                { ...offset },
            ],
        });

        window.removeEventListener('click', clickOutside);
        window.removeEventListener('keydown', handleKeydown);
        window.removeEventListener('click', hide);
    }

    element.addEventListener('click', show);
    items.forEach(item => {
        const children = item.querySelectorAll(`[data-lit-dropdown-item]`);
        if (children.length == 0) {
            item.addEventListener('click', hide);
        }
    });
});
