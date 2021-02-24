const elements = document.querySelectorAll('.maxWidthElement');

elements.forEach(element => {
    let setSliderWidth = element => {
        let id = element.dataset.ref;
        let xLeft = document.getElementById(id).getBoundingClientRect().x;

        let maxWidthElement = element.getBoundingClientRect();
        let containerWidth = maxWidthElement.x + maxWidthElement.width - xLeft;

        if (element.dataset.left) {
            containerWidth = xLeft;
        }

        element.querySelector('.edgeDropContainer').style.width =
            containerWidth + 'px';
    };

    setSliderWidth(element);
    window.addEventListener('resize', () => {
        setSliderWidth(element);
    });
});
