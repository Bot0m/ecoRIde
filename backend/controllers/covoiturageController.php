<?php
// backend/controllers/CovoiturageController.php

require_once __DIR__ . '/../models/Covoiturage.php';

class CovoiturageController {

//Recherche des trajets selon les critères passés en paramètre.
//@param array $criteria Les critères de recherche.
//@return array Les trajets trouvés.

    public function searchTrajets($criteria) {
        $covoiturage = new Covoiturage();
        return $covoiturage->search($criteria);
    }

}