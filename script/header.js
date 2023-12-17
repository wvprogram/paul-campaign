/***
 *  script to change background-color of header for Vote and Contact webpage
 ***/
if (
    (window.location.href === 'http://localhost:4000/vote.php') ||
    (window.location.href === 'http://localhost:4000/contact.php') ||
    (window.location.href === 'http://localhost:4000/volunteer.php')
) {
    // select header tag
    let headTag = document.querySelector("header");

    //  add background-color to header tag
    headTag.style.backgroundColor = "#0a3161";
}