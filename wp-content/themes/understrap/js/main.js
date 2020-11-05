var myNav = document.querySelector("#wrapper-navbar > nav");

window.onscroll = function() {
    "use strict";
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        myNav.classList.add("scrolled");
    } else {
        myNav.classList.remove("scrolled");
    }
};

console.log(document.body.scrollTop);