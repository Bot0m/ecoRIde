<?php
/**
 * Point d'entrée de l'API
 * Gère les requêtes API et retourne les réponses en JSON
 */

namespace App\Api;

use App\Controllers\CovoiturageController;
use Exception;

require_once __DIR__ . '/autoload.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

try {
    // Récupération et validation de la ressource demandée
    $resource = isset($_GET['resource']) ? htmlspecialchars($_GET['resource']) : '';
    $method = $_SERVER['REQUEST_METHOD'];

    // Liste des ressources autorisées
    $allowedResources = ['trajets'];
    
    if (!in_array($resource, $allowedResources, true)) {
        throw new Exception("Ressource non autorisée", 403);
    }

    switch ($resource) {
        case 'trajets':
            $controller = new CovoiturageController();

            switch ($method) {
                case 'GET':
                    $criteria = [
                        'depart'      => $_GET['from'] ?? null,
                        'destination' => $_GET['to'] ?? null,
                        'date_trajet' => $_GET['date'] ?? null,
                        'passengers'  => $_GET['passengers'] ?? null,
                    ];
                    $response = $controller->searchTrajets($criteria);
                    break;

                default:
                    throw new Exception("Méthode non supportée", 405);
            }
            break;

        default:
            throw new Exception("Ressource non trouvée", 404);
    }

    echo json_encode([
        'success' => true,
        'data' => $response ?? null
    ]);

} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}