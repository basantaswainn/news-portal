document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('[data-mobile-nav-toggle]');
    const mobileNav = document.getElementById('mobile-nav');

    if (menuButton && mobileNav) {
        menuButton.addEventListener('click', () => {
            const isHidden = mobileNav.classList.toggle('hidden');
            menuButton.setAttribute('aria-expanded', String(!isHidden));
        });
    }

    const newsletterForm = document.querySelector('[data-newsletter-form]');
    const newsletterSuccess = document.querySelector('[data-newsletter-success]');

    if (newsletterForm && newsletterSuccess) {
        newsletterForm.addEventListener('submit', (event) => {
            event.preventDefault();
            newsletterSuccess.classList.remove('hidden');
            newsletterForm.reset();
        });
    }
});
