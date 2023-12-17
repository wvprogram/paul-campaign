/***
 *  Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon
 **/
document.addEventListener("DOMContentLoaded", function () {
    let hamburger = document.querySelector(".hamburger");

    hamburger.addEventListener("click", function () {
        hamburger.classList.toggle("is-active");

        // Get reference to the <html> tag
        let htmlElement = document.documentElement;

        // Get reference to the <body> tag
        let bodyElement = document.body;

        if (hamburger.classList.contains("is-active")) {
            htmlElement.classList.add("scrll-lock");
            bodyElement.classList.add("scroll-lock");
        } else {
            htmlElement.classList.remove("scrll-lock");
            bodyElement.classList.remove("scroll-lock");
        }

        //  Get reference to the mobile links id
        let mobileLinks = document.getElementById("mobile-links");
        
        if (mobileLinks.style.display === "block") {
            mobileLinks.style.display = "none";
        } else {
            mobileLinks.style.display = "block";
        }
    });
});