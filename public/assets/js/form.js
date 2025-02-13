// form.js – Gestion de la recherche sur la page covoiturages avec préparation aux appels Ajax

export function handleSearchForm() {
    const searchForm = document.getElementById("searchForm");
    if (!searchForm) return;

    searchForm.addEventListener("submit", async function(event) {
        event.preventDefault(); // On intercepte la soumission classique

        // Validation simple : vérifier que tous les champs requis sont remplis
        let isValid = true;
        searchForm.querySelectorAll("input[required], select[required], textarea[required]").forEach(input => {
            if (input.value.trim() === "") {
                isValid = false;
                input.classList.add("error");
            } else {
                input.classList.remove("error");
            }
        });
        if (!isValid) {
            alert("Veuillez remplir tous les champs obligatoires");
            return;
        }

        // Préparer les données pour une requête Ajax en GET (adaptable si vous passez en POST)
        const formData = new FormData(searchForm);
        const url = urlWithParams(searchForm.action, formData);

        try {
            const response = await fetch(url, { method: "GET" });
            // On suppose ici que la réponse est au format JSON
            const data = await response.json();
            console.log("Résultats de recherche:", data);
            // Mettre à jour l'interface avec les résultats de recherche
        } catch (error) {
            console.error("Erreur lors de la recherche:", error);
        }
    });
}

// Fonction utilitaire pour construire une URL GET avec les paramètres du formulaire
function urlWithParams(url, formData) {
    const params = new URLSearchParams();
    for (const [key, value] of formData.entries()) {
        params.append(key, value);
    }
    return url + (url.includes('?') ? '&' : '?') + params.toString();
}
