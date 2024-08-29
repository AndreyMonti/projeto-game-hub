document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    function showItem(index) {
        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) {
                item.classList.add('active');
            }
        });
    }

    function nextItem() {
        currentIndex = (currentIndex + 1) % totalItems;
        showItem(currentIndex);
    }

    function prevItem() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showItem(currentIndex);
    }

    document.querySelector('.carousel-controls .next').addEventListener('click', nextItem);
    document.querySelector('.carousel-controls .prev').addEventListener('click', prevItem);

    showItem(currentIndex); // Mostrar o primeiro item inicialmente
});


document.addEventListener('scroll', function() {
    const callToAction = document.querySelector('.call-to-action');
    const scrollPosition = window.scrollY + window.innerHeight;
    const pageHeight = document.documentElement.scrollHeight - 50; 

    if (scrollPosition >= pageHeight) {
        callToAction.classList.add('visible');
        callToAction.classList.remove('hidden');
    } else {
        callToAction.classList.add('hidden'); 
        callToAction.classList.remove('visible');
    }
});
