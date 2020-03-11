window.onscroll = function () {
    myFunction()
};

var navbar = document.getElementById("navbar");
var scroll = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= scroll) {
        navbar.classList.add("scroll")
    }
    else {
        navbar.classList.remove("scroll");
    }
}