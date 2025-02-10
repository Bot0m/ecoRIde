<?php
/**
Cette classe gère la connexion à la base de données MySQL en utilisant PDO.
Elle permet d'obtenir une connexion sécurisée avec la gestion des erreurs.
*/

class Database {
    private $host = "localhost";
    private $db_name = "covoiturage_db";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                $this->username,
                $this->password
            );
            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $exception) {
            error_log("Erreur PDO : " . $exception->getMessage()); // Enregistre l'erreur dans les logs
            throw new Exception("Erreur de connexion à la base de données.", 500);
        }
        return $this->conn;
    }
}