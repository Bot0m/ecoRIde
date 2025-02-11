// Gestion de l'affichage des formulaires (recherche et publication)
export function handleFormToggle() {
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
export function validateForm() {
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

