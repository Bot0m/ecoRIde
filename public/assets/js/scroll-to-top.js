/**
 * Gestion du bouton "Retour en haut"
 * Affiche/masque le bouton en fonction du défilement et gère l'animation
 */

/**
 * Initialise le comportement du bouton de retour en haut
 * @returns {void}
 */
export function handleScrollToTop() {
    const scrollToTopBtn = document.getElementById("scrollToTop");
    if (!scrollToTopBtn) return;
    
    // Affiche/masque le bouton selon la position de défilement
    window.addEventListener("scroll", () => {
        scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
    });
    
    // Gère le clic sur le bouton avec animation fluide
    scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}
