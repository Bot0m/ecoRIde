<?php
/**
 * Classe de gestion de la connexion à la base de données
 * Utilise PDO pour une connexion sécurisée avec gestion des erreurs
 */

namespace App\Config;

use PDO;
use PDOException;
use Exception;

class Database {
    /** @var PDO|null Instance de connexion */
    private $conn = null;

    /**
     * Établit la connexion à la base de données
     * @return PDO Instance de connexion PDO
     * @throws Exception En cas d'erreur de connexion
     */
    public function getConnection() {
        try {
            if ($this->conn === null) {
                $this->conn = new PDO(
                    "mysql:host=" . Config::DB_HOST .
                    ";dbname=" . Config::DB_NAME .
                    ";charset=utf8mb4",
                    Config::DB_USER,
                    Config::DB_PASS
                );
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $exception) {
            error_log("Erreur PDO : " . $exception->getMessage());
            throw new Exception("Erreur de connexion à la base de données.", 500);
        }
        return $this->conn;
    }
}