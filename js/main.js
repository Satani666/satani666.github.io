// Mobile Burger Menu
document.querySelector('.menu__btn').addEventListener('click', function() {
    document.querySelector('.menu__list').classList.toggle('menu__list--active');
});

// Sticky Header
window.onscroll = function() { myFunction() };
var navbar = document.getElementById("header");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}