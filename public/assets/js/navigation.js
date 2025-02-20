/**
 * Gestion de la navigation et du menu mobile
 * Inclut la gestion des liens actifs et du menu burger
 */

/**
 * Met en surbrillance le lien correspondant à la page actuelle
 * @returns {void}
 */
export function handleActiveLinks() {
    const currentPage = window.location.search.split('=')[1] || 'home';
    const navLinks = document.querySelectorAll('.navbar-menu a');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        const pageName = href?.split('=')[1];
        if (pageName === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

/**
 * Gère l'ouverture/fermeture du menu burger sur mobile
 * @returns {void}
 */
export function handleMenuToggle() {
    const burgerButton = document.querySelector('.navbar-toggle');
    const navMenu = document.querySelector('.navbar-menu');
    
    if (!burgerButton || !navMenu) return;

    const toggleMenu = () => {
        burgerButton.classList.toggle('active');
        navMenu.classList.toggle('active');
        const isExpanded = burgerButton.classList.contains('active');
        burgerButton.setAttribute('aria-expanded', isExpanded.toString());
    };

    burgerButton.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        toggleMenu();
    });

    navMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            burgerButton.classList.remove('active');
            navMenu.classList.remove('active');
            burgerButton.setAttribute('aria-expanded', 'false');
        });
    });
}
