<main class="covoiturages">
    <section class="search-section">
        <h1 class="hero-title">Rechercher votre prochain trajet</h1>
        <div class="search-container">
            <div class="search-row">
                <div class="search-group">
                    <label for="from-search">De</label>
                    <input type="text" id="from-search" placeholder="Lieu de départ" class="search-input">
                </div>
                <div class="search-group">
                    <label for="to-search">À</label>
                    <input type="text" id="to-search" placeholder="Lieu d'arrivée" class="search-input">
                </div>
            </div>
            <div class="search-row">
                <div class="search-group">
                    <label for="date-search">Date</label>
                    <input type="date" id="date-search" class="search-input">
                </div>
                <div class="search-group">
                    <label for="passengers-search">Nombre de passagers</label>
                    <select id="passengers-search" class="search-input">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <button class="search-button-co" title="Lancer votre recherche">Rechercher</button>
            </div>
        </div>
    </section>
    <section class="search-results">
    <div class="no-results">
        <p>Aucun trajet n'a été trouvé pour votre recherche.</p>
        <p>Essayez une autre recherche ou explorez nos suggestions :</p>
    </div>
    
    <div class="suggested-trips">
        <h3>🚗 Trajets populaires</h3>
        <div class="trip-cards">
            <div class="trip-card">
                <p><strong>Paris → Lyon</strong></p>
                <p>💰 30€ | ⏰ 08:00</p>
                <button class="trip-button">Voir</button>
            </div>
            <div class="trip-card">
                <p><strong>Bordeaux → Marseille</strong></p>
                <p>💰 25€ | ⏰ 10:30</p>
                <button class="trip-button">Voir</button>
            </div>
            <div class="trip-card">
                <p><strong>Lille → Strasbourg</strong></p>
                <p>💰 20€ | ⏰ 12:00</p>
                <button class="trip-button">Voir</button>
            </div>
        </div>
    </div>
</section>
</main>