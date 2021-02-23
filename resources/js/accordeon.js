import Accordion from 'accordion-js';

const container = document.querySelectorAll('.accordion-container');

container.forEach(element => {
    new Accordion(element, {
        duration: 300,
    });
});

const containerMultiple = document.querySelectorAll(
    '.accordion-container-multiple'
);

containerMultiple.forEach(element => {
    new Accordion(element, {
        duration: 300,
        showMultiple: true,
    });
});
