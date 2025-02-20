<?php
/**
 * Page d'accueil
 * Présente les fonctionnalités principales et le formulaire de recherche/publication
 */
?>
<body>
    <main class="main">
        <!-- Section d'introduction (Hero Section) -->
        <section class="hero-section">
            <div class="hero-container">
                <h1 class="hero-title">Trouver ou proposer votre prochain voyage</h1>
                
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

                        <!-- Formulaire principal -->
                        <form id="travelForm" class="form" action="index.php?page=covoiturages" method="GET">
                            <div class="search-group">
                                <label for="from">Départ</label>
                                <input type="text" id="from" name="from" class="search-input" placeholder="Ville de départ" required>
                            </div>
                            <div class="search-group">
                                <label for="to">Destination</label>
                                <input type="text" id="to" name="to" class="search-input" placeholder="Ville d'arrivée" required>
                            </div>
                            <div class="search-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="search-input" required>
                            </div>
                            <div class="search-group">
                                <label for="passengers">Passagers</label>
                                <select id="passengers" name="passengers" class="search-input" required>
                                    <option value="1">1 passager</option>
                                    <option value="2">2 passagers</option>
                                    <option value="3">3 passagers</option>
                                    <option value="4">4 passagers</option>
                                </select>
                            </div>
                            <button type="submit" class="search-button">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <div class="content-pair">
                <div class="content-text">
                    <h2>Qui sommes nous ?</h2>
                    <p>EcoRide est une plateforme innovante dédiée à la mobilité durable. Notre mission est de proposer des solutions pratiques et accessibles pour encourager des déplacements respectueux de l'environnement. Nous croyons que chaque trajet peut contribuer à un avenir plus propre, et nous mettons tout en œuvre pour rendre l'écomobilité plus simple et efficace pour tous.</p>
                </div>
                <div class="content-image">
                    <img src="../public/assets/pictures/pexels-pripicart-620335.jpg" alt="ilustration">
                </div>
            </div>

            <div class="content-pair">
                <div class="content-image">
                    <img src="../public/assets/pictures/pexels-davidgallie-28884704.jpg" alt="véhicule électrique">
                </div>
                <div class="content-text">
                    <h2>Pourquoi choisir EcoRide ?</h2>
                    <p>Face aux défis environnementaux actuels, EcoRide s'engage à promouvoir une alternative aux modes de transport polluants. En choisissant notre solution, vous participez à une démarche écologique visant à réduire l'empreinte carbone des déplacements quotidiens. Nous privilégions des pratiques responsables et des outils innovants pour rendre chaque trajet plus durable, tout en garantissant une expérience fluide et agréable.</p>
                </div>
            </div>

            <div class="content-pair">
                <div class="content-text">
                    <h2>Nos objectifs</h2>
                    <p>Notre ambition est de révolutionner la mobilité urbaine en mettant à disposition des outils intelligents pour une gestion plus verte des déplacements. Nous voulons sensibiliser, accompagner et proposer des alternatives concrètes pour permettre à chacun de contribuer à la transition écologique, sans compromis sur la praticité et le confort.</p>
                </div>
                <div class="content-image">
                    <img src="../public/assets/pictures/EcoRide.svg" alt="logo">
                </div>
            </div>
        </section>

        <!-- Section des avis -->
        <section class="reviews-section">
            <h2 class="reviews-title">Ce que disent nos utilisateurs</h2>
            <div class="reviews-container">
                <!-- Avis 1 -->
                <div class="review-card">
                    <p class="review-text">"Super application ! J'ai trouvé un covoiturage en quelques minutes."</p>
                    <p class="review-author">- Pierre-Jacques B ⭐️⭐️⭐️⭐️</p>
                </div>
                <!-- Avis 2 -->
                <div class="review-card">
                    <p class="review-text">"Une communauté bienveillante et un service fiable. Je recommande à 100%."</p>
                    <p class="review-author">- Nolwenn J ⭐️⭐️⭐️⭐️⭐️</p>
                </div>
                <!-- Avis 3 -->
                <div class="review-card">
                    <p class="review-text">"Une expérience fluide et intuitive. EcoRide m'aide à économiser au quotidien !"</p>
                    <p class="review-author">- Philippe L ⭐️⭐️⭐️⭐️</p>
                </div>
            </div>
        </section>

    </main>
</body>