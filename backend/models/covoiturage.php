<?php
/**
 * Modèle de gestion des covoiturages
 * Gère les interactions avec la base de données pour les trajets
 */

namespace App\Models;

use App\Config\Database;
use PDO;

class Covoiturage {
    /** @var PDO Instance de connexion à la base de données */
    private $conn;
    
    /** @var string Nom de la table dans la base de données */
    private $table = "covoiturages";

    /**
     * Constructeur : initialise la connexion à la base de données
     */
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    /**
     * Recherche des trajets selon les critères spécifiés
     * @param array $criteria Les critères de recherche
     * @return array Les trajets correspondants aux critères
     */
    public function search($criteria) {
        $query = "SELECT * FROM " . $this->table . " WHERE 1=1";
        $params = [];

        // Construction dynamique de la requête selon les critères
        if (!empty($criteria['depart'])) {
            $query .= " AND depart LIKE :depart";
            $params[':depart'] = "%" . $criteria['depart'] . "%";
        }

        if (!empty($criteria['destination'])) {
            $query .= " AND destination LIKE :destination";
            $params[':destination'] = "%" . $criteria['destination'] . "%";
        }

        if (!empty($criteria['date_trajet'])) {
            $query .= " AND DATE(date_trajet) = :date_trajet";
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

    /**
     * Récupère un trajet par son ID
     * @param int $id Identifiant du trajet
     * @return array|null Le trajet trouvé ou null
     */
    public function findById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result : null;
    }
}