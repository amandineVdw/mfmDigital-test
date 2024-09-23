<?php
// src/models/Database.php

class Database
{
    private $db;

    public function __construct()
    {
        // Utiliser BASE_PATH pour construire le chemin absolu
        $config = require_once BASE_PATH . 'config/config.php';

        try {
            // Créer une nouvelle instance PDO avec les paramètres du fichier config
            $this->db = new PDO(
                "mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'] . ";charset=utf8",
                $config['db_user'],
                $config['db_pass']
            );

            // Définir le mode d'erreur PDO sur Exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // En cas d'erreur, envoyer un message vers le fichier error.log
            error_log("Erreur de connexion à la base de données : " . $e->getMessage(), 3, BASE_PATH . 'logs/error.log');
            die("Erreur de connexion à la base de données.");
        }
    }

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection()
    {
        return $this->db;
    }
}