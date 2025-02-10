<?php
require_once 'controllers/covoiturageController.php'; // Inclure le contrôleur de covoiturage

header('Content-Type: application/json'); // Indiquer que l'API retourne du JSON

// Vérifier si une action est spécifiée dans l'URL (ex: ?action=getCovoiturages)
if (!isset($_GET['action'])) {
    echo json_encode(["error" => "Aucune action spécifiée"]);
    exit;
}

$action = $_GET['action'];

switch ($action) {
    case 'getCovoiturages':
        echo json_encode(covoiturageController::getAll());
        break;

    default:
        echo json_encode(["error" => "Action non reconnue"]);
}
