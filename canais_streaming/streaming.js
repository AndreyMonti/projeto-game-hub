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
