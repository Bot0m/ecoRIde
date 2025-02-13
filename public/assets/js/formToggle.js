// formtoggle.js – Gestion du toggleswitch pour basculer entre Rechercher et Publier,
// avec préparation à une soumission Ajax du formulaire principal

export function handleFormToggleSwitch() {
    const toggleSearch = document.getElementById('toggleSearch');
    const togglePublish = document.getElementById('togglePublish');
    const travelForm = document.getElementById('travelForm');
    const submitButton = travelForm ? travelForm.querySelector('.search-button') : null;

    if (!toggleSearch || !togglePublish || !travelForm || !submitButton) return;

    // Par défaut, on définit le mode "Rechercher"
    setSearchMode();

    // Écouteurs pour basculer les modes
    toggleSearch.addEventListener('click', () => {
        setSearchMode();
    });
    togglePublish.addEventListener('click', () => {
        setPublishMode();
    });

    // Intercepter la soumission du formulaire pour préparer un appel Ajax
    travelForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Validation simple avant envoi
        if (!validateTravelForm(travelForm)) {
            alert("Veuillez remplir tous les champs obligatoires");
            return;
        }

        // Préparer les données du formulaire pour une requête Ajax GET
        const formData = new FormData(travelForm);
        let url = travelForm.action;
        url = urlWithParams(url, formData);

        try {
            const response = await fetch(url, { method: "GET" });
            // On suppose ici que la réponse est au format JSON
            const data = await response.json();
            console.log("Réponse Ajax de travelForm:", data);
            // Mettre à jour l'interface selon la réponse (par exemple afficher des résultats ou messages)
        } catch (error) {
            console.error("Erreur lors de la requête Ajax:", error);
        }
    });

    // Fonctions internes pour définir le mode de l'interface
    function setSearchMode() {
        toggleSearch.classList.add('active');
        togglePublish.classList.remove('active');
        travelForm.action = 'index.php?page=covoiturages';
        submitButton.textContent = 'Rechercher';
    }

    function setPublishMode() {
        togglePublish.classList.add('active');
        toggleSearch.classList.remove('active');
        travelForm.action = 'index.php?page=publier';
        submitButton.textContent = 'Publier';
    }
}

// Fonction utilitaire pour construire une URL GET avec les paramètres du formulaire
function urlWithParams(url, formData) {
    const params = new URLSearchParams();
    for (const [key, value] of formData.entries()) {
        params.append(key, value);
    }
    return url + (url.includes('?') ? '&' : '?') + params.toString();
}

// Validation simple du formulaire travelForm
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
