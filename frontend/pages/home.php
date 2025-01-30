<main class="main">
    <div class="main-container">
        <h1>Trouver ou proposer votre prochain voyage</h1>
    </div>

    <div class="columns">
        <!-- Colonne gauche : Logo -->
        <div class="column left">
            <div class="logo-container">
                <img src="../public/assets/pictures/EcoRide-logo.svg" alt="logo" class="logo">
            </div>
        </div>

        <!-- Colonne droite : Toggle & Formulaires -->
        <div class="column right">
            <!-- Toggle Switch -->
            <div class="toggle-container">
                <button id="toggleSearch" class="toggle-button active">Rechercher</button>
                <button id="togglePublish" class="toggle-button">Publier</button>
            </div>

            <!-- Conteneur des formulaires -->
            <div class="form-container">
                <!-- Formulaire de recherche -->
                <div id="searchForm" class="form active">
                    <label for="from-search">De</label>
                    <input type="text" id="from-search" placeholder="Lieu de départ" class="search-input">

                    <label for="to-search">À</label>
                    <input type="text" id="to-search" placeholder="Lieu d'arrivée" class="search-input">

                    <label for="date-search">Date</label>
                    <input type="date" id="date-search" class="search-input">

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

                    <button class="search-button">Rechercher</button>
                </div>

                <!-- Formulaire de publication -->
                <div id="publishForm" class="form">
                    <label for="from-publish">De</label>
                    <input type="text" id="from-publish" placeholder="Lieu de départ" class="search-input">

                    <label for="to-publish">À</label>
                    <input type="text" id="to-publish" placeholder="Lieu d'arrivée" class="search-input">

                    <label for="date-publish">Date</label>
                    <input type="date" id="date-publish" class="search-input">

                    <label for="passengers-publish">Nombre de passagers</label>
                    <select id="passengers-publish" class="search-input">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>

                    <button class="search-button">Publier</button>
                </div>
            </div>
        </div>
    </div>
</main>