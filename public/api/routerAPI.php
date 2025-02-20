<?php
/**
 * Routeur de l'API
 * Gère les requêtes API et les redirige vers le point d'entrée approprié
 */

header("Content-Type: application/json");

// Activation des messages d'erreur pour le développement
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . '/../../backend/api.php';