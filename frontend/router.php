<?php
/**
 * Routeur frontal de l'application
 * Gère l'inclusion des pages en fonction de l'URL
 */

// Liste des pages disponibles dans l'application
$pages_disponibles = [
    'home',
    'mentions-legales',
    'covoiturages',
    'connexion',
    'publier',
    'inscription'
];

// Inclusion de la page demandée ou de la page 404
if (in_array($page, $pages_disponibles)) {
    include "pages/$page.php";
} else {
    include "pages/404.php";
}