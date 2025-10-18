import AOS from 'aos';
import 'aos/dist/aos.css';


import './bootstrap';
// Header scroll background change
window.addEventListener("scroll", () => {
    const header = document.getElementById("main-header");
    if (window.scrollY > 50) {
        header.classList.add("bg-black", "shadow-lg", "py-2");
        header.classList.remove("bg-transparent", "py-4");
    } else {
        header.classList.add("bg-transparent", "py-4");
        header.classList.remove("bg-black", "shadow-lg", "py-2");
    }
});

// Mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const openIcon = document.getElementById('menu-open-icon');
const closeIcon = document.getElementById('menu-close-icon');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
}

AOS.init({
    duration: 1000, // animation duration in ms
    once: true, // whether animation should happen only once while scrolling down
});
