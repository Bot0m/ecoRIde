document.addEventListener('DOMContentLoaded', () => {
    initialize();
});

// Initialisation des fonctionnalités principales au chargement du DOM
function initialize() {
    handleActiveLinks();
    handleMenuToggle();
    handleFormToggle();
    validateForm();
    handleScrollToTop();
}

// Gestion des liens actifs dans la navigation
// Cette fonction met en surbrillance le lien correspondant à la page actuelle
function handleActiveLinks() {
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
function handleMenuToggle() {
    const toggle = document.querySelector('.navbar-toggle');
    const menu = document.querySelector('.navbar-menu');
    
    if (!toggle || !menu) return;
    
    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        menu.classList.toggle('active');
    });
}

// Gestion de l'affichage des formulaires (recherche et publication)
function handleFormToggle() {
    const toggleSearch = document.getElementById("toggleSearch");
    const togglePublish = document.getElementById("togglePublish");
    const searchForm = document.getElementById("searchForm");
    const publishForm = document.getElementById("publishForm");
    const allForms = document.querySelectorAll(".form");
    
    if (!toggleSearch || !togglePublish || !searchForm || !publishForm) return;
    
    toggleSearch.addEventListener("click", () => toggleForm(searchForm, toggleSearch, togglePublish, allForms));
    togglePublish.addEventListener("click", () => toggleForm(publishForm, togglePublish, toggleSearch, allForms));
}

// Fonction pour basculer entre les formulaires visibles
function toggleForm(formToShow, buttonToActivate, buttonToDeactivate, allForms) {
    allForms.forEach(form => form.classList.remove("active"));
    formToShow.classList.add("active");
    buttonToActivate.classList.add("active");
    buttonToDeactivate.classList.remove("active");
}

// Validation des formulaires
// Vérifie que tous les champs requis sont remplis avant soumission
function validateForm() {
    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", event => {
            let isValid = true;
            form.querySelectorAll("input[required], select[required], textarea[required]").forEach(input => {
                if (input.value.trim() === "") {
                    isValid = false;
                    input.classList.add("error");
                } else {
                    input.classList.remove("error");
                }
            });
            if (!isValid) {
                alert("Veuillez remplir tous les champs obligatoires");
                event.preventDefault();
            }
        });
    });
}

// Gestion du bouton "Retour en haut"
// Affiche ou masque le bouton en fonction du défilement et gère l'animation de retour en haut
function handleScrollToTop() {
    const scrollToTopBtn = document.getElementById("scrollToTop");
    if (!scrollToTopBtn) return;
    
    window.addEventListener("scroll", () => {
        scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
    });
    
    scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}
