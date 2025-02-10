<?php
// Configuration globale
require_once '../backend/config/config.php';

// Récupérer la page demandée via l'URL (par défaut : home)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide - <?= ucfirst(str_replace('-', ' ', $page)) ?></title>

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- Chargement dynamique du CSS spécifique -->
    <?php
    $css_file = "assets/css/$page.css";
    if (file_exists($css_file)) {
        echo '<link rel="stylesheet" href="' . $css_file . '">';
    }
    ?>
</head>
<body>

    <?php include '../frontend/components/header.php'; ?>

    <main>
        <?php include '../frontend/router.php'; ?>
    </main>

    <?php include '../frontend/components/footer.php'; ?>

    <!-- Bouton remonter en haut -->
    <button id="scrollToTop" class="scroll-to-top" aria-label="Remonter la page">&#8679;</button>

    <!-- Scripts -->
    <script src="assets/js/script.js" defer></script>
</body>
</html>
