/***
 *  script to give top image and title parallax effect
 ***/
let title = document.getElementById('prlx-title');
let image = document.getElementById('prlx-image');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    title.style.marginTop = value * 1.3 + 'px';
    image.style.marginTop = value * 0.5 + 'px';
})