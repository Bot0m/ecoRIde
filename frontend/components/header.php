<?php
/**
 * En-tête du site
 * Contient la navigation principale et le menu mobile
 */

// Récupération de la page courante
$current_page = $_GET['page'] ?? 'home';
?>

<header class="header">
    <div class="header-container">
        <nav class="navbar">
            <div class="navbar-container">
                <div class="navbar-logo"></div>
                <!-- Menu principal -->
                <ul class="navbar-menu">
                    <li>
                        <a href="index.php?page=home"
                            class="<?php echo $current_page === 'home' ? 'active' : ''; ?>"
                            title="Aller à l'accueil">Accueil</a>
                    </li>
                    <li>
                        <a  href="index.php?page=covoiturages"
                            class="<?php echo $current_page === 'covoiturages' ? 'active' : ''; ?>"
                            title="Voir les annonces">Covoiturages</a>
                    </li>
                    <li>
                        <a href="index.php?page=annonce"
                            class="<?php echo $current_page === 'annonce' ? 'active' : ''; ?>"
                            title="Proposer un trajet">Publier une annonce</a>
                    </li>
                    <li>
                        <a  href="index.php?page=connexion"
                            class="<?php echo $current_page === 'connexion' ? 'active' : ''; ?>"
                            title="Connectez-vous">Connexion</a>
                    </li>
                </ul>

                <!-- Menu burger pour mobile -->
                <button type="button" class="navbar-toggle" aria-label="Ouvrir le menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </div>
</header>
