<?php
// backend/models/Covoiturage.php

require_once __DIR__ . '/../config/database.php';

class Covoiturage {
    private $conn;
    private $table = "covoiturages";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }


//Recherche des trajets en fonction des critères :
//- depart : recherche partielle (LIKE)
//- destination : recherche partielle (LIKE)
//- date_trajet : correspondance exacte
//- passengers : places disponibles >= nombre de passagers demandés
//@param array $criteria
//@return array
public function search($criteria) {
    $query = "SELECT * FROM " . $this->table . " WHERE 1=1";
    $params = [];

    if (!empty($criteria['depart'])) {
        $query .= " AND depart LIKE :depart";
        $params[':depart'] = '%' . $criteria['depart'] . '%';
    }

    if (!empty($criteria['destination'])) {
        $query .= " AND destination LIKE :destination";
        $params[':destination'] = '%' . $criteria['destination'] . '%';
    }

    if (!empty($criteria['date_trajet'])) {
        $query .= " AND date_trajet = :date_trajet";
        $params[':date_trajet'] = $criteria['date_trajet'];
    }

    if (!empty($criteria['passengers'])) {
        $query .= " AND places >= :passengers";
        $params[':passengers'] = $criteria['passengers'];
    }

    $stmt = $this->conn->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}