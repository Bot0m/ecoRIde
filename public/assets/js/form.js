/**
 * Gestion des formulaires de recherche et de publication
 * Inclut la validation et les appels API
 */

/**
 * Initialise la gestion du formulaire de recherche
 * @returns {void}
 */
export function handleSearchForm() {
    const searchForm = document.getElementById("searchForm");
    if (!searchForm) return;

    searchForm.addEventListener("submit", async function(event) {
        event.preventDefault();

        if (!validateForm(searchForm)) {
            alert("Veuillez remplir tous les champs obligatoires");
            return;
        }

        await submitForm(searchForm);
    });
}

/**
 * Valide les champs du formulaire
 * @param {HTMLFormElement} form - Le formulaire à valider
 * @returns {boolean} - True si le formulaire est valide
 */
function validateForm(form) {
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
 * Soumet le formulaire via une requête AJAX
 * @param {HTMLFormElement} form - Le formulaire à soumettre
 * @returns {Promise<void>}
 */
async function submitForm(form) {
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: new URLSearchParams(formData),
        });
        
        const data = await response.json();
        displaySearchResults(data);
    } catch (error) {
        console.error("Erreur lors de la recherche:", error);
        displaySearchResults(null, error);
    }
}

/**
 * Affiche les résultats de la recherche
 * @param {Object|null} data - Les résultats de la recherche
 * @param {Error|null} error - L'erreur éventuelle
 * @returns {void}
 */
function displaySearchResults(data, error = null) {
    const container = document.getElementById("search-results");
    if (!container) return;
    
    container.innerHTML = "";

    if (error) {
        container.innerHTML = "<p>Erreur lors de la recherche.</p>";
        return;
    }

    if (!data || data.length === 0) {
        container.innerHTML = "<p>Aucun trajet trouvé.</p>";
        return;
    }

    // Affichage des résultats
    data.forEach(trajet => {
        const trajetDiv = document.createElement("div");
        trajetDiv.classList.add("trajet-result");
        trajetDiv.innerHTML = `
            <h3>${trajet.depart} → ${trajet.destination}</h3>
            <p>Date: ${trajet.date_trajet}</p>
            <p>Places disponibles: ${trajet.places}</p>
        `;
        container.appendChild(trajetDiv);
    });
}
