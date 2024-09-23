<?php
// src/controllers/ContactController.php


require_once BASE_PATH . 'src/models/ContactModel.php';

class ContactController
{
    private $model;

    public function __construct($database)
    {
        $this->model = new ContactModel($database);
    }

    public function showForm()
    {
        // Inclure la vue du formulaire
        require_once BASE_PATH . 'src/views/contact-view.php';
    }

    public function submitContact()
    {
        // Vérification des données du formulaire
        $contactData = [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'telephone' => $_POST['telephone'],
            'email' => $_POST['email'],
            'adresse' => $_POST['adresse'],
            'code_postal' => $_POST['code_postal'],
            'ville' => $_POST['ville'],
        ];

        // Sauvegarde des données via le modèle
        if ($this->model->saveContact($contactData)) {
            echo "Merci, vos informations ont été soumises avec succès !";
        } else {
            echo "Erreur lors de la soumission du formulaire.";
        }
    }
}