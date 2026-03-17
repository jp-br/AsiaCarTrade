// public/js/script.js

let lastScrollTop = 0;
const navbar = document.getElementById('mainNavbar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Check if user has scrolled more than 50px (optional, for stability)
    if (Math.abs(lastScrollTop - scrollTop) <= 5) return;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scrolling Down - Hide Navbar
        navbar.classList.add('nav-up');
    } else {
        // Scrolling Up - Show Navbar
        navbar.classList.remove('nav-up');
    }
    lastScrollTop = scrollTop;
});