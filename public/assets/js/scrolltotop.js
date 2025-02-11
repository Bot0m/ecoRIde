// Gestion du bouton "Retour en haut"
// Affiche ou masque le bouton en fonction du défilement et gère l'animation de retour en haut
export function handleScrollToTop() {
    const scrollToTopBtn = document.getElementById("scrollToTop");
    if (!scrollToTopBtn) return;
    
    window.addEventListener("scroll", () => {
        scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
    });
    
    scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}
