<?php
//configuration globale
require_once '../backend/config/config.php';

// Récupérer la page demandée via l'URL (par défaut : home)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
    // Include header
    require_once '../frontend/components/header.php';

    // Charger le contenu de la page en fonction de "page"
    switch ($page) {
        case 'home':
            include '../frontend/pages/home.php';
            break;
        case 'mentions-legales':
            include '../frontend/pages/mentions-legales.php';
            break;
        case 'covoiturages':
            include '../frontend/pages/covoiturages.php';
            break;
        case 'connexion':
            include '../frontend/pages/connexion.php';
            break;
        default:
            // Page 404 pour les pages inconnues
            echo "<main><h1>404 - Page non trouvée</h1></main>";
            break;
    }

    //include footer
    require_once '../frontend/components/footer.php';
    ?>
    <button id="scrollToTop" class="scroll-to-top" aria-label="Remonter la page">&#8679;</button>
    <script src="assets/js/script.js" defer></script>
</body>
</html>