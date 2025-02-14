<?php
require_once 'controllers/covoiturageController.php'; // Inclure le contrôleur de covoiturage

header('Content-Type: application/json'); // Indiquer que l'API retourne du JSON

$resource = $_GET['resource'] ?? '';

switch ($resource) {
    case 'trajets':
        require_once 'controllers/CovoiturageController.php';
        $controller = new covoiturageController();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Récupérer les critères depuis les paramètres GET
            $criteria = [
                'depart'      => $_GET['from'] ?? null,
                'destination' => $_GET['to'] ?? null,
                'date_trajet' => $_GET['date'] ?? null,
                'passengers'  => $_GET['passengers'] ?? null,
            ];
            echo json_encode($controller->searchTrajets($criteria));
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['message' => 'Ressource non trouvée']);
        break;
}