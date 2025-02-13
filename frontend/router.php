<?php
// Liste des pages disponibles
$pages_disponibles = ['home', 'mentions-legales', 'covoiturages', 'connexion', 'publier'];

if (in_array($page, $pages_disponibles)) {
    include "pages/$page.php";
} else {
    include "pages/404.php";
}
