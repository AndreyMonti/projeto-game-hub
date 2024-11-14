let slideIndex = 0;
showSlides(slideIndex);

function moveSlide(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n - 1);
}

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("carousel-item");
    const dots = document.getElementsByClassName("dot");

    if (n >= slides.length) { slideIndex = 0; }
    if (n < 0) { slideIndex = slides.length - 1; }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " active";
}
document.addEventListener('DOMContentLoaded', function() {
    var header = document.getElementById('header');
    var navigationHeader = document.getElementById('navigation_header');
    var content = document.querySelector('.hero'); // Atualizado para selecionar a seção hero
    var menuToggle = document.getElementById('menu-toggle');
    var sidebar = document.getElementById('sidebar');
    var closeSidebar = document.getElementById('close-sidebar');
    var showSidebar = false;
    function toggleSidebar() {
        showSidebar = !showSidebar;
        if (showSidebar) {
            sidebar.style.left = '0';
            content.classList.add('blur');
        } else {
            sidebar.style.left = '-100vw';
            content.classList.remove('blur');
        }
    }
    menuToggle.addEventListener('click', toggleSidebar);
    closeSidebar.addEventListener('click', toggleSidebar);
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && showSidebar) {
            toggleSidebar(); // Fecha a sidebar quando a tela é redimensionada para um tamanho maior
        }
    });
});