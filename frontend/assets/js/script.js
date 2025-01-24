
// Sélection des éléments
const toggle = document.querySelector('.navbar-toggle');
const menu = document.querySelector('.navbar-menu');

// Écouteur d'événement pour le clic sur le hamburger menu
toggle.addEventListener('click', () => {
    // Bascule la classe active pour le menu et le toggle
    menu.classList.toggle('active');
    toggle.classList.toggle('active');
});

toggleButton.addEventListener('click', () => {
    toggleButton.classList.toggle('active'); // Ajoute/enlève la classe .active
    menu.classList.toggle('active'); // Affiche/masque le menu
});
