/***
 *  script to change header into solid color when scrolling
 ***/

// select header tag
let headTag = document.querySelector("header");

window.addEventListener("scroll", () => {
    if (window.scrollY >= 128) {
        //  add background-color class to header tag
        headTag.classList.add("solid-header");
    } else {
        //  remove background-color class to header tag
        headTag.classList.remove("solid-header");
    }
})