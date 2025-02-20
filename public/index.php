<?php
/**
 * Point d'entrée principal de l'application
 * Gère le routage et l'affichage des pages
 */

use App\Config\Config;

// Configuration globale
require_once '../backend/config/config.php';
require_once __DIR__ . '/../backend/autoload.php';
require_once '../backend/config/Database.php';

// Récupération de la page demandée (par défaut : home)
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

    <!-- Chargement dynamique du CSS spécifique à la page -->
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
    <script type="module" src="assets/js/main.js"></script>
</body>
</html>
