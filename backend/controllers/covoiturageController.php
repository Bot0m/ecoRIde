<?php
/**
 * Contrôleur de gestion des covoiturages
 * Gère la logique métier liée aux trajets
 */

namespace App\Controllers;

use App\Models\Covoiturage;
use App\Config\Database;

class CovoiturageController {
    /** @var Covoiturage Instance du modèle Covoiturage */
    private $covoiturageModel;

    /**
     * Constructeur : initialise le modèle
     */
    public function __construct() {
        $this->covoiturageModel = new Covoiturage();
    }

    /**
     * Recherche des trajets selon les critères spécifiés
     * @param array $criteria Les critères de recherche
     * @return array Les trajets trouvés
     */
    public function searchTrajets($criteria) {
        try {
            return $this->covoiturageModel->search($criteria);
        } catch (\Exception $e) {
            error_log("Erreur lors de la recherche des trajets : " . $e->getMessage());
            return [];
        }
    }

    /**
     * Récupère un trajet par son ID
     * @param int $id Identifiant du trajet
     * @return array|null Le trajet trouvé ou null
     */
    public function getTrajetById($id) {
        try {
            return $this->covoiturageModel->findById($id);
        } catch (\Exception $e) {
            error_log("Erreur lors de la récupération du trajet : " . $e->getMessage());
            return null;
        }
    }
}