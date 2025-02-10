<?php
/**
Cette page permet de récupérer les trajets de covoiturage depuis la base de données.
Elle retourne soit tous les trajets disponibles, soit ceux correspondant à une recherche spécifique (départ, arrivée, date).
 */

include_once '../config/database.php';
include_once '../models/covoiturage.php';

$database = new Database();
$db = $database->getConnection();
$covoiturage = new Covoiturage($db);

$action = $_GET['action'] ?? '';

if ($action === "search") {
    $depart = $_GET['depart'] ?? '';
    $arrivee = $_GET['arrivee'] ?? '';
    $date = $_GET['date'] ?? '';
    $stmt = $covoiturage->searchTrajets($depart, $arrivee, $date);
} else {
    $stmt = $covoiturage->getAllTrajets();
}

$trajets = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($trajets);