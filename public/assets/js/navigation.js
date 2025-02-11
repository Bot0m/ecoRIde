// Gestion des liens actifs dans la navigation
// Cette fonction met en surbrillance le lien correspondant à la page actuelle
export function handleActiveLinks() {
    const menuLinks = document.querySelectorAll('.navbar-menu a');
    const currentUrl = window.location.href;
    
    menuLinks.forEach(link => {
        link.classList.remove('active');
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
}

// Gestion du menu burger pour la navigation mobile
export function handleMenuToggle() {
    const toggle = document.querySelector('.navbar-toggle');
    const menu = document.querySelector('.navbar-menu');
    
    if (!toggle || !menu) return;
    
    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        menu.classList.toggle('active');
    });
}
