document.addEventListener("DOMContentLoaded", function () {
    const searchButton = document.querySelector(".search-button-co");

    searchButton.addEventListener("click", () => {
        fetch("assets/data/trajets.json") // Chemin relatif à `public`
            .then(response => response.json())
            .then(trajets => afficherTrajets(trajets))
            .catch(error => console.error("Erreur lors du chargement des trajets:", error));
    });

    function afficherTrajets(trajets) {
        const depart = document.getElementById("from-search").value.trim().toLowerCase();
        const arrivee = document.getElementById("to-search").value.trim().toLowerCase();
        const date = document.getElementById("date-search").value;

        const resultContainer = document.querySelector(".search-results");
        resultContainer.innerHTML = ""; // On vide la section avant d'afficher les résultats

        const trajetsFiltres = trajets.filter(trajet => 
            trajet.depart.toLowerCase().includes(depart) &&
            trajet.arrivee.toLowerCase().includes(arrivee) &&
            (date === "" || trajet.date === date)
        );

        if (trajetsFiltres.length === 0) {
            resultContainer.innerHTML = "<p>Aucun trajet trouvé pour cette recherche.</p>";
            return;
        }

        trajetsFiltres.forEach(trajet => {
            const card = document.createElement("div");
            card.classList.add("trip-card");

            card.innerHTML = `
                <img src="${trajet.photo}" alt="Photo de ${trajet.pseudo}" class="driver-photo">
                <p><strong>${trajet.depart} → ${trajet.arrivee}</strong></p>
                <p>🚗 Conducteur : ${trajet.pseudo} | ⭐ ${trajet.note}</p>
                <p>💰 ${trajet.prix}€ | ⏰ ${trajet.heure}</p>
                <p>🧑‍🤝‍🧑 Places restantes : ${trajet.places_restantes}</p>
                <button class="trip-button">Voir</button>
            `;

            resultContainer.appendChild(card);
        });
    }
});

