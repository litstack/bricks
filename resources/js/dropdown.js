import { createPopper } from '@popperjs/core';

const elements = document.querySelectorAll('[data-lit-dropdown-trigger]');

const litNavs = document.querySelectorAll('[data-lit-nav]');

/**
 * Hide all members of a dropdown group, e.g. a navigation with multiple dropdowns
 *
 * @param {*} dropdown
 */
const hideGroupMembers = dropdown => {
    if (dropdown.getAttribute(`data-group`)) {
        const groupId = dropdown.getAttribute(`data-group`);
        const group = document.querySelectorAll(`[data-group="${groupId}"]`);
        group.forEach(gourpItem => {
            gourpItem.removeAttribute('data-show');
            const children = gourpItem.querySelectorAll(`[data-dropdown-id]`);
            children.forEach(child => {
                child.removeAttribute('data-show');
            });
        });
    }
};

/**
 * Get the offset option
 *
 * @param {*} dropdown
 * @returns
 */
const getOffset = dropdown => {
    return {
        name: 'offset',
        options: {
            offset: [
                parseInt(dropdown.getAttribute('data-offset-x')),
                parseInt(dropdown.getAttribute('data-offset-y')),
            ],
        },
    };
};

const getOptions = dropdown => {
    return {
        ...getPlacement(dropdown),
        modifiers: [{ ...getOffset(dropdown) }],
    };
};

/**
 * Get the placement option
 *
 * @param {*} dropdown
 * @returns
 */
const getPlacement = dropdown => {
    return {
        placement: dropdown.getAttribute('data-placement') || 'bottom-end',
    };
};

/**
 * Show dropdown
 *
 * @param {*} element
 * @param {*} dropdown
 * @param {*} popperInstance
 * @returns
 */
const show = (element, dropdown, popperInstance) => {
    return function() {
        hideGroupMembers(dropdown);

        // Make the dropdown visible

        dropdown.setAttribute('data-show', '');

        // Enable the event listeners
        popperInstance.setOptions({
            modifiers: [
                { name: 'eventListeners', enabled: true },
                { ...getOffset(dropdown) },
            ],
        });

        // Update its position
        popperInstance.update();

        // handle click outside
        window.addEventListener('click', function clickOutside(e) {
            let target = e.target;
            if (element == target || dropdown.contains(target)) {
                return;
            }
            hide(dropdown, popperInstance);
            e.currentTarget.removeEventListener(e.type, clickOutside);
        });

        // handle esc-key
        window.addEventListener(
            'keydown',
            e => {
                let evt = e || window.event;
                var isEscape = false;
                if ('key' in evt) {
                    isEscape = evt.key === 'Escape' || evt.key === 'Esc';
                } else {
                    isEscape = evt.keyCode === 27;
                }
                if (isEscape) {
                    hide(dropdown, popperInstance);
                }
            },
            { once: true }
        );

        litNavs.forEach(nav => {
            let closeTimeout;
            nav.addEventListener('mouseenter', e => {
                clearTimeout(closeTimeout);
            });
            nav.addEventListener('mouseleave', e => {
                closeTimeout = setTimeout(() => {
                    hide(dropdown, popperInstance);
                }, 350);
            });
        });

        const items = dropdown.querySelectorAll(`[data-lit-dropdown-item]`);
        items.forEach(item => {
            const children = item.querySelectorAll(`[data-lit-dropdown-item]`);
            if (children.length == 0) {
                item.addEventListener('click', function handleClick(e) {
                    hide(dropdown, popperInstance);
                });
            }
        });
    };
};

/**
 * Hide Dropdown
 *
 * @param {*} dropdown
 * @param {*} popperInstance
 */
const hide = (dropdown, popperInstance) => {
    // Hide the dropdown
    dropdown.removeAttribute('data-show');

    // Disable the event listeners
    popperInstance.setOptions({
        modifiers: [
            { name: 'eventListeners', enabled: false },
            { ...getOffset(dropdown) },
        ],
    });
    window.removeEventListener('click', hide);
};

elements.forEach(element => {
    const id = element.getAttribute('id');

    const dropdown = document.querySelector(`[data-dropdown-id="${id}"]`);
    const trigger = dropdown.getAttribute(`data-trigger-event`);

    const popperInstance = createPopper(
        element,
        dropdown,
        getOptions(dropdown)
    );

    element.addEventListener(trigger, show(element, dropdown, popperInstance));
});

const rootElements = document.querySelectorAll(`[data-hide-dropdown-group]`);

rootElements.forEach(element => {
    element.addEventListener('mouseenter', () => {
        const groupId = element.getAttribute(`data-hide-dropdown-group`);
        const group = document.querySelectorAll(`[data-group="${groupId}"]`);
        group.forEach(gourpItem => {
            gourpItem.removeAttribute('data-show');
            const children = gourpItem.querySelectorAll(`[data-dropdown-id]`);
            children.forEach(child => {
                child.removeAttribute('data-show');
            });
        });
    });
});
