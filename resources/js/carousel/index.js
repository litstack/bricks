import { setupCarousel } from './setupCarousel';

const emblaNodes = document.getElementsByClassName('embla');

for (let index = 0; index < emblaNodes.length; index++) {
    const emblaNode = emblaNodes[index];

    setupCarousel(emblaNode);
}
