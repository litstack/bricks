/* --------  Scroll Gallery Modal */

const bodyScrollLock = require('body-scroll-lock');
const disableBodyScroll = bodyScrollLock.disableBodyScroll;

const galleryOpenEls = document.querySelectorAll('.lit-open-scroll-gallery');
const galleryCloseEls = document.querySelectorAll('.lit-close-scroll-gallery');
const galleries = document.querySelectorAll('.lit-scroll-gallery');
const galleryContainer = document.getElementById(
    'lit-scroll-gallery-container'
);

// gallery open
for (const galleryOpenEl of galleryOpenEls) {
    galleryOpenEl.addEventListener('click', function (event) {
        event.preventDefault();

        let gallery = this.getAttribute('data-gallery');
        document.querySelector('#' + gallery).classList.add('is-visible');
        let anchor = this.getAttribute('href');
        if (anchor) {
            document.querySelector(anchor).scrollIntoView();
        }
        disableBodyScroll(galleryContainer);
    });
}

// gallery close button
for (const galleryCloseEl of galleryCloseEls) {
    galleryCloseEl.addEventListener('click', function (event) {
        event.preventDefault();
        this.parentNode.parentNode.classList.remove('is-visible');
        bodyScrollLock.clearAllBodyScrollLocks();
    });
}

// gallery close esc
document.addEventListener('keydown', (event) => {
    if (event.key == 'Escape') {
        for (const gallery of galleries) {
            gallery.classList.remove('is-visible');
        }
        bodyScrollLock.clearAllBodyScrollLocks();
    }
});
