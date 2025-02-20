<?php
/**
 * Page de recherche de covoiturages
 * Affiche le formulaire de recherche et les résultats
 */

use App\Config\Config;

?>
<body>
    <main class="covoiturages">
        <section class="search-section">
            <h1 class="hero-title">Rechercher votre prochain trajet</h1>
            <div class="search-container">
                <!-- Formulaire de recherche -->
                <form id="searchForm" class="ajax-form" action="<?php echo Config::BASE_URL; ?>api/routerAPI.php?resource=trajets" method="GET">
                    <div class="search-row">
                        <div class="search-group">
                            <label for="from-search">De</label>
                            <input type="text" id="from-search" name="from" placeholder="Lieu de départ" class="search-input" required>
                        </div>
                        <div class="search-group">
                            <label for="to-search">À</label>
                            <input type="text" id="to-search" name="to" placeholder="Lieu d'arrivée" class="search-input" required>
                        </div>
                    </div>
                    <div class="search-row">
                        <div class="search-group">
                            <label for="date-search">Date</label>
                            <input type="date" id="date-search" name="date" class="search-input" required>
                        </div>
                        <div class="search-group">
                            <label for="passengers-search">Passagers</label>
                            <select id="passengers-search" name="passengers" class="search-input" required>
                                <option value="1">1 passager</option>
                                <option value="2">2 passagers</option>
                                <option value="3">3 passagers</option>
                                <option value="4">4 passagers</option>
                            </select>
                        </div>
                        <button type="submit" class="search-button-co">Rechercher</button>
                    </div>
                </form>
            </div>

            <!-- Résultats de recherche -->
            <div id="search-results">
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
</body>