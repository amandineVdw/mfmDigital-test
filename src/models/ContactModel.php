<?php
// src/models/ContactModel.php

class ContactModel
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function saveContact($data)
    {
        // Préparation de la requête pour insérer les données du formulaire
        $sql = "INSERT INTO contacts (nom, prenom, telephone, email, adresse, code_postal, ville) 
                VALUES (:nom, :prenom, :telephone, :email, :adresse, :code_postal, :ville)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':telephone', $data['telephone']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':code_postal', $data['code_postal']);
        $stmt->bindParam(':ville', $data['ville']);
        
        // Exécution de la requête
        return $stmt->execute();
    }
}