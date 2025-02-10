<?php
// Liste des pages disponibles
$pages_disponibles = ['home', 'mentions-legales', 'covoiturages', 'connexion'];

if (in_array($page, $pages_disponibles)) {
    include "pages/$page.php";
} else {
    include "pages/404.php";
}
