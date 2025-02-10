<?php
/**
Cette classe permet de gérer les trajets de covoiturage dans la base de données.
Elle fournit des méthodes pour récupérer tous les trajets et rechercher des trajets selon le lieu de départ, le lieu d'arrivée et la date de départ.
 */

class Covoiturage {
    private $conn;
    private $table = "covoiturages";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllTrajets() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function searchTrajets($depart, $arrive, $date) {
        $query = "SELECT * FROM " . $this->table . " WHERE lieu_depart LIKE ? AND lieu_arrivee LIKE ?";
        $params = ["%$depart%", "%$arrive%"];

        if (!empty($date)) {
            $query .= " AND date_depart = ?";
            $params[] = $date;
        }

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}