// form-toggle.js – Gestion du toggleswitch pour basculer entre Rechercher et Publier,
// avec préparation à une soumission Ajax du formulaire principal

/**
 * Gestion du basculement entre les modes "Rechercher" et "Publier"
 * dans le formulaire principal avec préparation pour soumission Ajax
 */

/**
 * Initialise et gère le basculement entre les modes du formulaire
 * @returns {void}
 */
export function handleFormToggleSwitch() {
    const toggleSearch = document.getElementById('toggleSearch');
    const togglePublish = document.getElementById('togglePublish');
    const travelForm = document.getElementById('travelForm');
    const submitButton = travelForm ? travelForm.querySelector('.search-button') : null;

    if (!toggleSearch || !togglePublish || !travelForm || !submitButton) return;

    // Initialisation en mode "Rechercher"
    setSearchMode();

    // Écouteurs pour les boutons de basculement
    toggleSearch.addEventListener('click', () => {
        setSearchMode();
    });
    togglePublish.addEventListener('click', () => {
        setPublishMode();
    });

    // Gestion de la soumission du formulaire
    travelForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        if (!validateTravelForm(travelForm)) {
            alert("Veuillez remplir tous les champs obligatoires");
            return;
        }

        await submitTravelForm(travelForm);
    });

    /**
     * Configure l'interface en mode "Rechercher"
     * @returns {void}
     */
    function setSearchMode() {
        toggleSearch.classList.add('active');
        togglePublish.classList.remove('active');
        travelForm.action = 'index.php?page=covoiturages';
        submitButton.textContent = 'Rechercher';
    }

    /**
     * Configure l'interface en mode "Publier"
     * @returns {void}
     */
    function setPublishMode() {
        togglePublish.classList.add('active');
        toggleSearch.classList.remove('active');
        travelForm.action = 'index.php?page=publier';
        submitButton.textContent = 'Publier';
    }
}

/**
 * Valide les champs requis du formulaire
 * @param {HTMLFormElement} form - Le formulaire à valider
 * @returns {boolean} - True si le formulaire est valide
 */
function validateTravelForm(form) {
    let isValid = true;
    form.querySelectorAll("input[required], select[required], textarea[required]").forEach(input => {
        if (input.value.trim() === "") {
            isValid = false;
            input.classList.add("error");
        } else {
            input.classList.remove("error");
        }
    });
    return isValid;
}

/**
 * Construit une URL avec les paramètres du formulaire
 * @param {string} url - L'URL de base
 * @param {FormData} formData - Les données du formulaire
 * @returns {string} - L'URL complète avec paramètres
 */
function urlWithParams(url, formData) {
    const params = new URLSearchParams();
    for (const [key, value] of formData.entries()) {
        params.append(key, value);
    }
    return url + (url.includes('?') ? '&' : '?') + params.toString();
}
